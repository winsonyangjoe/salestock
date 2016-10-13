<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
    public function index() {
        $uri_segment = 3;

        $this->load->library('pagination');
        $this->pagination->initialize([
            'uri_segment' => $uri_segment,
            'base_url' => site_url('user/index'),
            'total_rows' => $this->user_model->get_count()
        ]);
        
        $search = null;
        $order = parse_order_token($this->input->get('order'));
        $order = $order && in_array($order['field'], ['id', 'name', 'email']) ? $order : null;
        $limit = $this->pagination->per_page;
        $page = $this->uri->segment($uri_segment) ? $this->uri->segment($uri_segment) : 1;
        $offset = ($page - 1) * $limit;
        $users = $this->user_model->get_some($search, $order, $limit, $offset);
        if (!$users && $page > 1) {
            redirect('user');
            return;
        }

        $this->load_view('user/list', [
            'users' => $users,
            'order' => $order
        ]);
    }

    public function login() {
        if ($this->is_logged_in()) {
            redirect($this->input->post('redirect') ? $this->input->post('redirect') : $this->input->get('redirect'));
            return;
        }

        if ($this->input->post('submit')) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('password', 'Password', 'callback_email_password_check', [
                'email_password_check' => 'Invalid login'
            ]);

            if ($this->form_validation->run())
            {
                if ($this->login_user($this->user)) {
                    $this->log([
                        'action' => 'login',
                        'key_1' => 'ip_address',
                        'value_1' => $this->input->ip_address(),
                        'key_2' => 'user_agent',
                        'value_2' => $this->input->user_agent(),
                    ]);
                    redirect($this->input->post('redirect'));
                } else {
                    show_error('Failed to login', 500);
                }
                return;
            }
        }

        $this->load->view('login', [
            'redirect' => $this->input->post('redirect') ? $this->input->post('redirect') : $this->input->get('redirect')
        ]);
    }

    public function email_password_check($password) {
        $this->load->model('user_model');
        $user = $this->user_model->get_by_email_password($this->input->post('email'), $password);
        if (!$user) {
            return false;
        }

        $this->user = $user;
        return true;
    }

    public function logout() {
        $this->logout_user();
        redirect();
    }

    public function create() {
        if ($this->input->post('submit')) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('name', 'Name', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');
            $this->form_validation->set_rules('role_id', 'Role', 'trim|callback_valid_role');

            if ($this->form_validation->run()) {
                $name = $this->input->post('name');
                $email = $this->input->post('email');
                $role_id = $this->input->post('role_id');
                if ($user = $this->user_model->create($name, $email, $role_id)) {
                    $this->log([
                        'action' => 'create_user',
                        'object' => 'user',
                        'object_id' => $user['id'],
                        'key_1' => 'name',
                        'value_1' => $user['name'],
                        'key_2' => 'email',
                        'value_2' => $user['email'],
                        'key_3' => 'role_id',
                        'value_3' => $role_id
                    ]);
                    $this->session->set_flashdata('success', 'Sucessfully created user ' . $name . '. Email: ' . $email . '. Password (please note!): ' . $user['password']);
                } else {
                    $this->session->set_flashdata('error', 'Failed to create user ' . $name . '. Email: ' . $email);
                }

                redirect('user');
                return;
            }
        }

        $this->load_view('user/form', [
            'roles' => $this->user_model->get_roles()
        ]);
    }

    public function valid_role($role_id) {
        if (!$role_id) {
            return true;
        }

        return !!$this->user_model->get_role($role_id);
    }
}
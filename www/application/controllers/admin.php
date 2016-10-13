<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
    public function user_role() {
        $this->load_view('admin/user_role/list', ['roles' => $this->user_model->get_roles()]);
    }

    public function create_user_role() {
        if ($this->input->post('submit')) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('name', 'Name', 'trim|required|is_unique[role.name]');

            if ($this->form_validation->run()) {
                $role_name = $this->input->post('name');
                if ($role_id = $this->user_model->add_role($role_name)) {
                    $this->log([
                        'action' => 'create_role',
                        'object' => 'role',
                        'object_id' => $role_id,
                        'key_1' => 'role_name',
                        'value_1' => $role_name
                    ]);
                    $this->session->set_flashdata('success', 'Sucessfully created role ' . $role_name);
                } else {
                    $this->session->set_flashdata('error', 'Failed to create user role ' . $role_name);
                }

                redirect('admin/user_role');
                return;
            }
        }

        $this->load_view('admin/user_role/form');
    }

    public function delete_user_role() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('id', 'Id', 'trim|required|callback_is_role_used', [
            'is_role_used' => 'Role is in used'
        ]);
        if ($this->form_validation->run()) {
            $role_id = $this->input->post('id');
            if ($this->user_model->delete_role($role_id)) {
                $this->log([
                    'action' => 'delete_role',
                    'object' => 'role',
                    'object_id' => $role_id,
                ]);
                $this->session->set_flashdata('success', 'Successfully deleted user role with id ' . $role_id);
            } else {
                $this->session->set_flashdata('error', 'Failed to delete user role with id ' . $role_id);
            }
        } else {
            $this->session->set_flashdata('error', validation_errors(null, null));
        }

        redirect('admin/user_role');
    }

    public function is_role_used($id) {
        return !$this->user_model->is_role_used($id);
    }

    public function area() {
        $this->load->model('sales_model');
        $this->load_view('admin/area/list', ['areas' => $this->sales_model->get_areas()]);
    }

    public function create_area() {
        $this->load->model('sales_model');
        if ($this->input->post('submit')) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('name', 'Name', 'trim|required|is_unique[area.name]');

            if ($this->form_validation->run()) {
                $area_name = $this->input->post('name');
                if ($area_id = $this->sales_model->add_area($area_name)) {
                    $this->log([
                        'action' => 'create_area',
                        'object' => 'area',
                        'object_id' => $area_id,
                        'key_1' => 'area_name',
                        'value_1' => $area_name
                    ]);
                    $this->session->set_flashdata('success', 'Sucessfully created area ' . $area_name);
                } else {
                    $this->session->set_flashdata('error', 'Failed to create user area ' . $area_name);
                }

                redirect('admin/area');
                return;
            }
        }

        $this->load_view('admin/area/form');
    }

    public function delete_area() {
        $this->load->model('sales_model');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('id', 'Id', 'trim|required|callback_is_area_used', [
            'is_area_used' => 'Area is in used'
        ]);
        if ($this->form_validation->run()) {
            $area_id = $this->input->post('id');
            if ($this->user_model->delete_area($area_id)) {
                $this->log([
                    'action' => 'delete_area',
                    'object' => 'area',
                    'object_id' => $area_id,
                ]);
                $this->session->set_flashdata('success', 'Successfully deleted area with id ' . $area_id);
            } else {
                $this->session->set_flashdata('error', 'Failed to delete area with id ' . $area_id);
            }
        } else {
            $this->session->set_flashdata('error', validation_errors(null, null));
        }

        redirect('admin/area');
    }

    public function is_area_used($id) {
        return !$this->sales_model->is_area_used($id);
    }
}
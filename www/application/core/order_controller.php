<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OR_Controller extends CI_Controller {
    protected $user = null;

    public function __construct() {
        parent::__construct();
    }

    protected function is_logged_in() {
        $is_logged_in = isset($this->session->user_id) && $this->session->user_id;
        if (!$is_logged_in) {
            return false;
        }
        $user = $this->user_model->get_active_user_by_id($this->session->user_id);
        if (!$user) {
            return false;
        }

        $this->user = $user;
        return true;
    }

    private function is_login_page() {
        return 'user' == $this->router->fetch_class() && 'login' == $this->router->fetch_method();
    }

    protected function login_user($user) {
        if (!$user || !isset($user['id']) || !$user['id']) {
            return false;
        }

        $this->session->set_userdata('user_id', $user['id']);
        return true;
    }

    protected function logout_user() {
        $this->session->unset_userdata('user_id');
        return true;
    }

    protected function log($data) {
        $_data = [];
        if (isset($this->session->user_id)) {
            $data['user_id'] = $this->session->user_id;
        }
        $this->log_model->log(array_merge($data, $_data));
    }

    protected function load_view($view, $data = [], $header_data = [], $footer_data = []) {
        $this->load->view('header', [
            'user' => $this->user
        ]);
        $this->load->view($view, $data);
        $this->load->view('footer');
    }
}
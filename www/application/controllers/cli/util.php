<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Util extends CI_Controller {
    public function __construct() {
        parent::__construct();

        if (!is_cli()) {
            exit;
        }
    }

    public function create_first_super_admin() {
        $this->load->model('user_model');

        $user = $this->user_model->create_first_super_admin();
        if ($user) {
            echo 'email: ' . $user['email'] . "\npassword: " . $user['password'] . "\n";
        } else {
            echo "Failed\n";
        }
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration extends CI_Controller {
    public function __construct() {
        parent::__construct();

        if (!is_cli()) {
            exit;
        }

        $this->load->library('migration');
    }

    public function run() {
        if ($this->migration->current() === FALSE)
        {
            show_error($this->migration->error_string());
        }
    }
}

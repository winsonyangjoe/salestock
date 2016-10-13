<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Pagination extends CI_Pagination {
    public function get_total_rows() {
        return $this->total_rows;
    }
}
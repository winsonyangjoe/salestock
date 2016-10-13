<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_model extends CI_Model {
    public function log($data) {
        return $this->db->insert('log', array_merge($data, [
            'time' => date('Y-m-d H:i:s')
        ]));
    }
}
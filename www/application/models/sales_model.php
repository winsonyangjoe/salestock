<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_model extends CI_Model {
    public function get_areas() {
        $this->db->order_by('name', 'asc');
        return $this->db->get('area')->result_array();
    }

    public function add_area($name) {
        $success = $this->db->insert('area', ['name' => $name]);
        if (!$success) {
            return false;
        }
        return $this->db->insert_id();
    }

    public function delete_area($area_id) {
        return !!$this->db->delete('area', ['id' => $area_id]);
    }

    public function is_area_used($area_id) {
        return !!$this->db->get_where('sales_area', ['area_id' => $area_id], 1)->result_array();
    }
 }
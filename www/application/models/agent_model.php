<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agent_model extends CI_Model {
    public function get_agent() {
        $this->db->order_by('id', 'asc');
        return $this->db->get('agent')->result_array();
    }

    public function add_agent($data) {
        $success = $this->db->insert('agent', 
                                            [
                                                'name'    => $data['name'],
                                                'phone'   => $data['phone'],
                                                'address' => $data['address'],
                                                'lat'     => $data['lat'],
                                                'lon'     => $data['lon']
                                            ]);
        if (!$success) {
            return false;
        }
        return $this->db->insert_id();
    }

    public function delete_agent($agent_id) {
        return !!$this->db->delete('agent', ['id' => $agent_id]);
    }

    public function is_agent_used($agent_id) {
        return !!$this->db->get_where('agent_agent_type', ['agent_id' => $agent_id], 1)->result_array();
    }
 }
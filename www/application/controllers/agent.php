<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agent extends MY_Controller {
    public function index() {
        $this->load->model('agent_model');
        $this->load_view('agent/list', ['agents' => $this->agent_model->get_agent()]);
    }

    public function create() {
        $this->load->model('agent_model');
        if ($this->input->post('submit')) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('name', 'Name', 'trim|required|is_unique[agent.name]');
            $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
            $this->form_validation->set_rules('address', 'Address', 'trim|required');
            $this->form_validation->set_rules('lat', 'Latitude', 'trim|required');
            $this->form_validation->set_rules('lon', 'Longitude', 'trim|required');

            if ($this->form_validation->run()) {
                $agent_data['name']    = $this->input->post('name');
                $agent_data['phone']   = $this->input->post('phone');
                $agent_data['address'] = $this->input->post('address');
                $agent_data['lat']     = $this->input->post('lat');
                $agent_data['lon']     = $this->input->post('lon');
                if ($agent_id = $this->agent_model->add_agent($agent_data)) {
                    $this->log([
                        'action' => 'create_agent',
                        'object' => 'agent',
                        'object_id' => $agent_id,
                        'key_1' => 'agent_name',
                        'value_1' => $agent_name
                    ]);
                    $this->session->set_flashdata('success', 'Sucessfully created role ' . $agent_name);
                } else {
                    $this->session->set_flashdata('error', 'Failed to create user role ' . $agent_name);
                }

                redirect('agent');
                return;
            }
        }

        $this->load_view('agent/form');
    }

    public function delete_agent() {
        $this->load->model('agent_model');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('id', 'Id', 'trim|required|callback_is_agent_used', [
            'is_agent_used' => 'Agent is in used'
        ]);
        if ($this->form_validation->run()) {
            $agent_id = $this->input->post('id');
            if ($this->agent_model->delete_agent($agent_id)) {
                $this->log([
                    'action'    => 'delete_agent',
                    'object'    => 'agent',
                    'object_id' => $agent_id,
                ]);
                $this->session->set_flashdata('success', 'Successfully deleted agent with id ' . $agent_id);
            } else {
                $this->session->set_flashdata('error', 'Failed to delete agent with id ' . $agent_id);
            }
        } else {
            $this->session->set_flashdata('error', validation_errors(null, null));
        }

        redirect('agent');
    }

    public function is_agent_used($id) {
        $this->load->model('agent_model');
        return !$this->agent_model->is_agent_used($id);
    }
}
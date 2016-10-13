<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voucher extends MY_Controller {
    public function index() {
        $this->load->model('voucher_model');
        $this->load_view('voucher/list', ['voucher' => $this->voucher_model->get_voucher()]);
    }

    public function create_product() {
        $this->load->model('voucher_model');
        if ($this->input->post('submit')) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('name', 'Name', 'trim|required|is_unique[voucher.name]');
            $this->form_validation->set_rules('date_from', 'Date from', 'trim|required');
            $this->form_validation->set_rules('date_until', 'Date until', 'trim|required');

            if($this->input->post('type')=="percentage")
            {
                $this->form_validation->set_rules('quantity', 'Quantity', 'trim|numeric|callback_maximumCheck', [
                    'maximumCheck' => 'The %s field must be less than 100'
                ]);
            }
            else
            {
                $this->form_validation->set_rules('quantity', 'Quantity', 'trim|numeric');
            }            
            $this->form_validation->set_rules('type', 'Type', 'trim|required');

            if ($this->form_validation->run()) {
                $voucher_data['name']       = $this->input->post('name');
                $voucher_data['date_from']  = $this->input->post('date_from');
                $voucher_data['date_until'] = $this->input->post('date_until');
                $voucher_data['quantity']   = $this->input->post('quantity');
                $voucher_data['type']       = $this->input->post('type');
                if ($role_id = $this->voucher_model->add_voucher($voucher_data)) {
                    $this->log([
                        'action' => 'create_role',
                        'object' => 'role',
                        'object_id' => $role_id,
                        'key_1' => 'role_name',
                        'value_1' => $role_name
                    ]);
                    $this->session->set_flashdata('success', 'Sucessfully created voucher ' . $role_name);
                } else {
                    $this->session->set_flashdata('error', 'Failed to create voucher ' . $role_name);
                }

                redirect('voucher');
                return;
            }
        }

        $this->load_view('voucher/form');
    }

    public function delete_voucher() {
        $this->load->model('voucher_model');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('id', 'Id', 'trim|required');
        if ($this->form_validation->run()) {
            $voucher_id = $this->input->post('id');
            if ($this->voucher_model->delete_voucher($voucher_id)) {
                $this->log([
                    'action' => 'delete_role',
                    'object' => 'role',
                    'object_id' => $role_id,
                ]);
                $this->session->set_flashdata('success', 'Successfully deleted voucher with id ' . $voucher_id);
            } else {
                $this->session->set_flashdata('error', 'Failed to delete voucher with id ' . $voucher_id);
            }
        } else {
            $this->session->set_flashdata('error', validation_errors(null, null));
        }

        redirect('voucher');
    }

    public function maximumCheck($num)
    {
        if ($num > 100)
        {
            return FALSE;
        }
        else
        {
            return TRUE;
        }
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
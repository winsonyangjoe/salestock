<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends MY_Controller {
    public function index() {
        $this->web_view('website/index');
    }

    public function detail() {
        $this->web_view('website/product-details');
    }

    public function get_product($id=null) {
        $this->load->model('product_model');
        echo json_encode($this->product_model->get_product($id));
    }

    public function create_product() {
        $this->load->model('product_model');
        if ($this->input->post('submit')) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('name', 'Name', 'trim|required|is_unique[product.name]');
            $this->form_validation->set_rules('meta', 'Meta', 'trim|required');
            $this->form_validation->set_rules('sku', 'SKU', 'trim|required|is_unique[product.name]');
            $this->form_validation->set_rules('quantity', 'Quantity', 'trim|numeric');
            $this->form_validation->set_rules('description', 'Description', 'trim|required');
            $this->form_validation->set_rules('price', 'Price', 'trim|required|numeric');

            if ($this->form_validation->run()) {
                $product_data['name'] = $this->input->post('name');
                $product_data['meta'] = $this->input->post('meta');
                $product_data['sku'] = $this->input->post('sku');
                $product_data['quantity'] = $this->input->post('quantity');
                $product_data['description'] = $this->input->post('description');
                $product_data['price'] = $this->input->post('price');
                if ($role_id = $this->product_model->add_role($product_data)) {
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

                redirect('product');
                return;
            }
        }

        $this->load_view('product/form');
    }

    public function delete_product() {
        $this->load->model('product_model');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('id', 'Id', 'trim|required', [
            'is_role_used' => 'Role is in used'
        ]);
        if ($this->form_validation->run()) {
            $role_id = $this->input->post('id');
            if ($this->product_model->delete_product($role_id)) {
                $this->log([
                    'action' => 'delete_role',
                    'object' => 'role',
                    'object_id' => $role_id,
                ]);
                $this->session->set_flashdata('success', 'Successfully deleted product with id ' . $role_id);
            } else {
                $this->session->set_flashdata('error', 'Failed to delete product with id ' . $role_id);
            }
        } else {
            $this->session->set_flashdata('error', validation_errors(null, null));
        }

        redirect('product');
    }
}
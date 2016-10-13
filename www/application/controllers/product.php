<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {
    public function index() {
        $this->load->model('product_model');
        $this->load_view('product/list', ['roles' => $this->product_model->get_product()]);
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

            $message = $this->do_upload();
            if(!isset($message['error']))
            {
                $product_data['image'] = $message['file_name'];
            }
            else
            {
                $this->session->set_flashdata('error', 'Please provide an acceptable image.');
            }

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
                    $this->session->set_flashdata('success', 'Sucessfully created product');
                } else {
                    $this->session->set_flashdata('error', 'Failed to create product');
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

    public function do_upload(){
        $config = array(
            'upload_path'   => "./uploads/",
            'allowed_types' => "gif|jpg|png|jpeg|pdf",
            'overwrite'     => TRUE,
            'max_size'      => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height'    => "768",
            'max_width'     => "1024",
            'encrypt_name'  =>TRUE
        );
        if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
        $this->load->library('upload', $config);
        if($this->upload->do_upload())
        {
            $data['file_name'] = $this->upload->data('file_name');
            $data['status']    = "success";
            return $data;
        }
        else
        {
            $data['message'] = $this->form_validation->set_message('checkdoc', $data['error'] = $this->upload->display_errors());
            $data['status']  = "failed";
            return $data;
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
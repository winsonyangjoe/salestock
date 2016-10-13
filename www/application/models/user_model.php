<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    public function get_by_email_password($email, $password) {
        $result = $this->db->get_where('user', [
            'email' => strtolower(trim($email)),
            'password' => $this->hash_password($password)
        ], 1)->result_array();
        if (!$result) {
            return null;
        }

        return current($result);
    }

    private function hash_password($password) {
        return md5(trim($password));
    }

    private function generate_random_string() {
        $length = 4;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $characters_length = strlen($characters);
        $random_string = '';
        for ($i = 0; $i < $length; $i++) {
            $random_string .= $characters[rand(0, $characters_length - 1)];
        }
        return $random_string;
    }

    public function create_first_super_admin() {
        $random_string = $this->generate_random_string();

        $this->db->trans_start();
        $this->db->insert('user', ['email' => 'super@admin.dev', 'password' => $this->hash_password($random_string), 'name' => 'Super Admin']);
        $user_id = $this->db->insert_id();
        $this->db->insert('role', ['name' => 'Super Admin']);
        $role_id = $this->db->insert_id();
        $this->db->insert('user_role', ['user_id' => $user_id, 'role_id' => $role_id]);
        $this->db->trans_complete();

        $user = $this->db->get_where('user', ['id' => $user_id], 1)->result_array();
        if (!$user) {
            return null;
        }

        $user = current($user);
        $user['password'] = $random_string;
        return $user;
    }

    public function get_active_user_by_id($id) {
        $this->db->where('(is_disabled is null or is_disabled != 1)');
        $result = $this->db->get_where('user', ['id' => $id], 1)->result_array();
        if (!$result) {
            return null;
        }

        $user = current($result);
        $this->db->select('role.*');
        $this->db->join('user_role', 'user_role.role_id = role.id');
        $this->db->order_by('role.id', 'asc');
        $result = $this->db->get_where('role', ['user_role.user_id' => $user['id']])->result_array();
        if ($result) {
            $user['roles'] = [];
            foreach ($result as $row) {
                $user['roles'][] = $row;
            }
        }

        return $user;
    }

    public function get_roles() {
        $this->db->order_by('name', 'asc');
        return $this->db->get('role')->result_array();
    }

    public function add_role($name) {
        $success = $this->db->insert('role', ['name' => $name]);
        if (!$success) {
            return false;
        }
        return $this->db->insert_id();
    }

    public function is_role_used($role_id) {
        return !!$this->db->get_where('user_role', ['role_id' => $role_id], 1)->result_array();
    }

    public function delete_role($role_id) {
        return !!$this->db->delete('role', ['id' => $role_id]);
    }

    public function get_role($role_id) {
        $result = $this->db->get_where('role', ['id' => $role_id], 1)->result_array();
        if (!$result) {
            return null;
        }

        return current($result);
    }

    private function get($user_id) {
        $result = $this->db->get_where('user', ['id' => $user_id], 1)->result_array();
        if (!$result) {
            return null;
        }

        return current($result);
    }

    public function create($name, $email, $role_id) {
        $random_string = $this->generate_random_string();

        $this->db->trans_start();
        $this->db->insert('user', [
            'name' => $name,
            'email' => $email,
        ]);
        $user_id = $this->db->insert_id();
        if ($role_id) {
            $this->db->insert('user_role', [
                'user_id' => $user_id,
                'role_id' => $role_id,
            ]);
        }
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            return false;
        }

        $user = $this->get($user_id);
        $user['password'] = $random_string;
        return $user;
    }

    public function get_count() {
        return $this->db->count_all('user');
    }

    public function get_some($search, $order, $limit, $offset) {
        if ($order) {
            $this->db->order_by($order['field'], isset($order['sort']) && in_array(trim(strtolower($order['sort'])), ['asc', 'desc']) ? $order['sort'] : 'asc');
        }
        $this->db->limit($limit, $offset);
        return $this->db->get('user')->result_array();
    }

    public function get_area() {
        return $this->db->get('area')->result_array();
    }

    public function add_area($name) {
        $success = $this->db->insert('area', ['name' => $name]);
        if (!$success) {
            return false;
        }
        return $this->db->insert_id();
    }

    public function delete_area($role_id) {
        return !!$this->db->delete('area', ['id' => $role_id]);
    }
 }
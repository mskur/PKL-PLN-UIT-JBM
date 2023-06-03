<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model { 

    public function getLogin($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('admin');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $sess = array(
                    'username' => $row->username,
                    'password' => $row->password,
                    'level' => $row->level
                );
            }
            //$this->session->get_userdata($sess);
            $this->session->set_userdata($sess);
            redirect('AdminJBM/dashboard');
        } 
        else {
            $this->session->set_flashdata('error', 'Username atau Password salah');
            redirect('AdminJBM/login');
        }
    }
    
    public function protectLogin()
    {
        $username = $this->session->userdata('username');
        $password = $this->session->userdata('password');
        if (empty($username) && empty($password)) {
            redirect('AdminJBM/login');
        }
    }

    public function getPassword($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('admin');
        return $query->row_array();
    }

    public function updatePassword($data)
    {
        $this->db->where('username', $data['username']);
        $this->db->update('admin', $data);
    }
}
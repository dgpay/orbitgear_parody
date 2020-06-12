<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Account-ORBIT GEAR INDONEIA';
        $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();

        $this->load->view('account_detil', $data);
    }
}

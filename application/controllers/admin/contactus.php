<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ContactUs extends CI_Controller {
/**
 *Author : Rahul Negi
 *
 */
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
        $arr['page'] = 'contact';
        $this->load->view('admin/ManageContactMssgs',$arr);
    }

    public function add_user() {
        $arr['page'] = 'contact';
        $this->load->view('admin/AddUser',$arr);
    }

     public function edit_user() {
        $arr['page'] = 'contact';
        $this->load->view('admin/EditUser',$arr);
    }
    
     public function block_user() {
        // Code goes here
    }
    
     public function delete_user() {
        // Code goes here
    }
    
    
    
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
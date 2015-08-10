<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Products extends CI_Controller {
/**
 * ark Admin Panel for Codeigniter 
 * Author: Rahul singh negi
 * downloaded from http://devzone.co.in
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
        $arr['page'] = 'products';
        $this->load->view('admin/ManageProduct',$arr);
    }

    public function add_user() {
        $arr['page'] = 'products';
        $this->load->view('admin/AddUser',$arr);
    }

     public function edit_user() {
        $arr['page'] = 'products';
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
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class student extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 function __construct()
    {
        parent::__construct();
		$this->load->helper('url');
		$this->load->library(array('template','session'));
    }
	 
	public function index()
	{
		$data = '';
		
        //if($this->session->userdata('user_data')){
		$this->template->show("student_instructor", "body",$data);
		//}
		//else
		//{
		//	$this->load->view('administrator/login');
		//1111111}
		
	}
}

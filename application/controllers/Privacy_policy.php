<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privacy_policy extends CI_Controller{

	function __construct(){
	    parent::__construct();
	    $this->load->model('Privacy_policy_model');
		$this->load->model('Contact_us_model');
 	 }
	
	public function index(){
//		$data['privacy_policy'] = $this->Privacy_policy_model->get_privacy_policy();
		$data['contact_us'] =  $this->Contact_us_model->get_all_contact_us();
		$data['title'] = "finance-Privacy Policy";	
		$this->load->view('header', $data);
		$this->load->view('privacy_policy/privacy_policy_view');
		$this->load->view('footer');
	}
	
}?>

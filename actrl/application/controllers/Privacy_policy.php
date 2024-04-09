<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privacy_policy extends CI_Controller{

	function __construct(){
	  parent::__construct();
	  $this->load->model('Privacy_policy_model');
	  $this->load->model('Home_model');
 	 }
	
	public function index(){
		if($this->Home_model->check_session()){
//			$data['privacy_policy'] = $this->Privacy_policy_model->get_privacy_policy();

			$this->load->view('header');
			$this->load->view('privacy_policy/privacy_policy_view');
			$this->load->view('footer');
		}else{
			$msg=0;
			redirect('Home/index/'.$msg);
		}
	}
	
	public function update_privacy_policy(){
		$data = array(
			'privacy_policy'=>$this->input->post('privacy_policy')
		);
		$this->db->where('privacy_policy_id', 1);
		$this->db->update('privacy_policy', $data);
		
		redirect('Privacy_policy');
	}
}?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	function __construct()
  {
		parent::__construct();
		$this->load->model('Loan_solution_model');
		$this->load->model('We_serve_model');
	    $this->load->model("Apply_onilne_model");	
	    $this->load->model("Contact_us_model");	
	    $this->load->model("Home_model");	

  }
//	home view load
	public function index()
	{
        $data['contact_us'] =  $this->Contact_us_model->get_all_contact_us();
		$data['apply_online']=$this->Apply_onilne_model->get_apply_online();
		$data['online_content']=$this->Apply_onilne_model->get_content();
		$data['industries']=$this->We_serve_model->get_we_serve();
		$data['industries_content']=$this->We_serve_model->get_content();
		$data['loan_solution']=$this->Loan_solution_model->get_loan_solution();
		$data['loan_content']=$this->Loan_solution_model->get_content();
		$data['sliders']=$this->Home_model->sliders();
		$data['title'] = 'Finance-Home';
		
        $this->load->view('header_home',$data);
		$this->load->view('home_page_view');
	    $this->load->view('footer');	
	}
	
}?>
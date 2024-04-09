<?php defined('BASEPATH') OR exit('No direct script access allowed');

		class Loan_solution extends CI_controller{
			
			public function __Construct(){
				parent::__Construct();
				
				$this->load->model('Loan_solution_model');
				$this->load->model('Contact_us_model');
				$this->load->model('About_us_model');
			}
			public function index($title_after,$loan_id){
				$data['title'] = 'Finance-Loan options';
				$data['contact_us']=$this->Contact_us_model->get_all_contact_us();
				$data['about_us']=$this->About_us_model->get_one_about_us();
				$data['loan_content']=$this->Loan_solution_model->get_one_content($loan_id);
				
				$this->load->view('header',$data);
				$this->load->view('loan_solution/one_content_view');
				$this->load->view('footer');
			}
			//////////////////////business_loan_solution///////////////////////////
			public function loan_options(){
				$data['title'] = 'Finance-Loan options';
				$data['contact_us'] =  $this->Contact_us_model->get_all_contact_us();
				$data['about_us'] =    $this->About_us_model->get_one_about_us();
				$data['loan_solution']=$this->Loan_solution_model->get_loan_solution();
				$data['loan_content']=$this->Loan_solution_model->get_content();
				
				$this->load->view('header',$data);
				$this->load->view('loan_solution/loan_solution_view');
				$this->load->view('footer');
			}
			//////////////////////loan_content////////////////////////////////////
//			public function get_one_content($title_after,$loan_id){
//				$data['title'] = 'Finance-Loan options';
//				$data['contact_us']=$this->Contact_us_model->get_all_contact_us();
//				$data['about_us']=$this->About_us_model->get_one_about_us();
//				$data['loan_content']=$this->Loan_solution_model->get_one_content($loan_id);
//				
//				$this->load->view('header',$data);
//				$this->load->view('loan_solution/one_content_view',$data);
//				$this->load->view('footer');
//			}
		}?>
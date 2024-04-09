<?php defined('BASEPATH') OR exit('No direct script access allowed');

		class We_serve extends CI_controller{
			
			public function __Construct(){
				parent::__Construct();
				$this->load->model('We_serve_model');
				$this->load->model('Contact_us_model');
				$this->load->model('About_us_model');
			}
			//////////////////////industries_we_serve///////////////////////////
			public function industries(){
				$data['contact_us'] =  $this->Contact_us_model->get_all_contact_us();
				$data['about_us'] =    $this->About_us_model->get_one_about_us();
				$data['industries']=$this->We_serve_model->get_we_serve();
				$data['industries_content']=$this->We_serve_model->get_content();
				$data['title'] = 'Finance-Industries we serve';
				
				$this->load->view('header',$data);
				$this->load->view('we_serve/we_serve_view',$data);
				$this->load->view('footer',$data);
			}
//			//////////////////////industries_content////////////////////////////////////
			
			public function index($title_after,$industries_id){
//				$title_after=str_replace(" ","-",$title_before);
				$data['contact_us'] =  $this->Contact_us_model->get_all_contact_us();
				$data['about_us'] =    $this->About_us_model->get_one_about_us();
				$data['industries_content']=$this->We_serve_model->get_one_content($industries_id);
				$data['title'] = 'Finance-Industries we serve';
				
				$this->load->view('header',$data);
				$this->load->view('we_serve/one_content_view',$data);
				$this->load->view('footer',$data);
			}
		}?>
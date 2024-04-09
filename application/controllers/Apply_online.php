	<?php defined('BASEPATH') OR exit('No direct script access allowed');

		class Apply_online extends CI_Controller{

			public function __Construct(){
				parent::__Construct();
				$this->load->model("Apply_onilne_model");	
				$this->load->model('Contact_us_model');
//				$this->load->model('About_us_modelU');
			}
//////////////////////////////////////	//////////////Apply_online//////////////////////////////////////////////////////////////////////
			public function index(){
				$data['apply_online']=$this->Apply_onilne_model->get_apply_online();
				$data['online_content']=$this->Apply_onilne_model->get_content();
				$data['contact_us'] =  $this->Contact_us_model->get_all_contact_us();
				$title = "finance-apply online";	
				$data['title'] = $title;
//				$data['about_us'] =    $this->About_us_model->get_one_about_us();
				
				$this->load->view('header', $data);
				$this->load->view('apply_online/get_one_content_view' , $data);
				$this->load->view('footer', $data);
				
			}	
			
		////////////////////////////////////////////////////////////////online_content////////////////////////////////////////////////////////
//			public function get_content(){
//				
//				$this->load->view('header');
//				$this->load->view('apply_online/get_content_view', $data);
//				$this->load->view('footer');
//			}
	
/////////////////////////////////////////////////////////////////business_loans///////////////////////////////////////////////////////////////////			
			public function request(){
				$data['contact_us'] =  $this->Contact_us_model->get_all_contact_us();
				$title = "finance-loans";	
		     	$data['title'] = $title;
				
				$this->load->view('header', $data);
				$this->load->view('apply_online/section_get_loans_view' , $data);
				$this->load->view('footer', $data);	

			}
			
//	public function insert_content(){
//     	$data =array(
//	
//							'name'=>$this->input->post('name'),	
//							'phone'=>$this->input->post('phone'),
//							'email'=>$this->input->post('email'),
//							'time_in_business'=>$this->input->post('time_in_business'),
//							'credit_score'=>$this->input->post('credit_score'),
//							'monthly_revenue'=>$this->input->post('monthly_revenue'),
//						);
//         
//        
//				$this->db->insert('business_loans', $data);
//									
//				redirect('Apply_online/get_loans');
//			}
//

			public function send_mail(){
		//
				$this->load->library('email');
				$this->load->config('info_mail');

				$e_mail = $this->input->post('e_mail');
				$phone  = $this->input->post('phone');
				$s_name   = $this->input->post('name');
				$monthly_revenue  = $this->input->post('monthly_revenue');
				$time_in_business   = $this->input->post('time_in_business');
				$credit_score  = $this->input->post('credit_score');
				$message = 

				   "name :  <br> " . $this->input->post('s_name') .
					"phone :  <br> " . $this->input->post('phone') . 
					"Email :  " . $this->input->post('e_mail').'<br>' .
					"monthly_revenue :  " . $this->input->post('monthly_revenue') . '<br>' .
					"time_in_business :  " . $this->input->post('time_in_business') .'<br>' .
					"credit_score :  " . $this->input->post('credit_score') .'<br>' .
					'customer  Message : ' . $this->input->post('message') . '<br>';

				$this->email->to('kirolousraed472010@gmail.com');
				$this->email->from($this->config->item('smtp_user'));
				$this->email->subject($this->input->post('subject'));
				$this->email->message($message);

				if ($this->email->send()) {

					redirect('Apply_online/success');

				}else{
					redirect('Apply_online/error');
					}
				
			}

			public function success(){
				$title = "finance-success e_mail";	
				$data['title'] = $title;
				$data['contact_us'] =  $this->Contact_us_model->get_all_contact_us();
				$this->load->view('header', $data);
				$this->load->view('contact/sucses' , $data);
				$this->load->view('footer', $data);	
				
			}

			public function error(){
				$title = "finance-error e_mail";	
				$data['title'] = $title;
				$data['contact_us'] =  $this->Contact_us_model->get_all_contact_us();
				$this->load->view('header', $data);
				$this->load->view('contact/eror');
				$this->load->view('footer', $data);	
			
			}

 		}?>

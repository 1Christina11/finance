<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller{

	public function __construct(){
	   parent ::__construct();
		
	   $this->load->model('Contact_us_model');
	   $this->load->model('About_us_model');
	 }
	
	 public function index(){
        $data['contact_us'] =  $this->Contact_us_model->get_all_contact_us();
	    $data['about_us'] =    $this->About_us_model->get_one_about_us();
//		$data['services'] = $this->Services_model->get_all_services();
		$data['title'] = 'Finance-Contact us';
		
		$this->load->view('header',$data);
		$this->load->view('contact/contactview',$data);
	    $this->load->view('footer',$data);
		 
    }

	public function send_mail(){
		$this->load->library('email');
		$this->load->config('info_mail');
		$e_mail = $this->input->post('e_mail');
////	 	$website = $this->input->post('website');
////	    $sname   = $this->input->post('sname');
//	    $description   = $this->input->post('description');

		$message = 
			'Full Name : ' . $this->input->post('s_name') . '<br>' .
			'Phone Number : ' . $this->input->post('s_phone') . '<br>' .
			'website : ' . $this->input->post('url') . '<br>' .
			"Email : <a href='mailto:$e_mail'>$e_mail</a><br>" .
//            'description : ' . $this->input->post ('description') . '<br>' ;
			'Message : ' . $this->input->post('message') . '<br>';
		$this->email->to('bibrahim215@gmail.com');
		$this->email->from($this->config->item('smtp_user'));
		$this->email->subject($this->input->post('subject'));
		$this->email->message($message);

		if ($this->email->send()) {
			redirect('Contact_us/success');
		}else{
			redirect('Contact_us/error');
			}

	}

	public function success(){
        $data['contact_us'] =  $this->Contact_us_model->get_all_contact_us();
	    $data['about_us'] =    $this->About_us_model->get_one_about_us();
		$data['title'] = 'Finance-Success';
		
		$this->load->view('header',$data);
		$this->load->view('contact/sucses');
	    $this->load->view('footer',$data);
	}

	public function error(){
        $data['contact_us'] =  $this->Contact_us_model->get_all_contact_us();
	    $data['about_us'] =    $this->About_us_model->get_one_about_us();
		$data['title'] = 'Finance-Error';
		$this->load->view('header',$data);
		$this->load->view('contact/eror');
	    $this->load->view('footer',$data);
	}
	
}?>
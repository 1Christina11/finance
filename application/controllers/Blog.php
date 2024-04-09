<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller{

    public function __construct(){ 
		parent::__construct();
		$this->load->model('Blog_model');
		$this->load->model('Contact_us_model');
		$this->load->model('About_us_model');		
	}
    public function index()
    { 
		$data['blogs'] =$this->Blog_model->get_blog();
		$data['contact_us'] =  $this->Contact_us_model->get_all_contact_us();
		$data['about_us'] =    $this->About_us_model->get_one_about_us();
		$data['title'] = 'Finance-Our blog';
		
		$this->load->view('header',$data);
        $this->load->view('blog/blog_view' ,$data);
        $this->load->view('footer',$data);
    }
	
    public function get_one_blog($blog_id){
		$data['contact_us'] =  $this->Contact_us_model->get_all_contact_us();
		$data['about_us'] =    $this->About_us_model->get_one_about_us();
		$data['blog'] =$this->Blog_model->get_one_blog($blog_id);
		$data['title'] = 'Finance-Our blog';
		
		$this->load->view('header', $data);
        $this->load->view('blog/blog_one_view' ,$data);
        $this->load->view('footer', $data);
    }
	
}?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller {

	public function __construct()
	{
	   parent ::__construct();
	   $this->load->model('Contact_us_model');
		        $this->load->model("Home_model");

	 }


 

    public function edit_contact_us()
    {
		if($this->Home_model->check_session()){
          $data['contact_us'] = $this->Contact_us_model->get_one_contact();
		  $this->load->view('header');
          $this->load->view('contact_us/contact_us_edit_view',$data);
	      $this->load->view('footer');
        }else{
							$msg=0;
			redirect('Home/index/'.$msg);}
    }

    public function update_contact_us()
    {
      $data=array(
		  'site_on_map' => $this->input->post('site_on_map'),
		  'e_mail'=> $this->input->post('e_mail'),
		  'address'=> $this->input->post('address'),
		  'phone1'=> $this->input->post('phone1'),
		  'phone2'=> $this->input->post('phone2'),
		  'facebook_link'=> $this->input->post('facebook_link'),
		  'instgram_link'=> $this->input->post('instgram_link'),
		  'twitter_link'=> $this->input->post('twitter_link'),
		  'linkedin_link'=> $this->input->post('linkedin_link'),
		  'pinterest_link'=> $this->input->post('pinterest_link'),
      );

				$this->db->where('contact_us_id',1);
				$this->db->update('contact_us',$data);
	      redirect('Contact_us/edit_contact_us');

    }
//	public function insert_contact(){
//			
//			        $data=array(
//            'contact_us_id'=>'1',
//            'site_on_map'=>'koky@gmail.com',
//            'e_mail'=>'egypt',
//            'address'=>'0155554521',
//            'phone1'=>'httphlprlplr',
//            'phone2'=>'dkljkjkrjleelle',
//            'linkedin_link'=>'madrijhdkld;djz@gmail.com',
//            'instagram_link'=>'kdjmajldhriz@djklgmdkail.eduhcom',
						
						
						
//        );

//}
}

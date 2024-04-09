<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {


    public function __construct()
    {
		parent::__construct();
		$this->load->model('Blog_model');		
		$this->load->model('Home_model');		
    }
    

    public function index()
    {
		if($this->Home_model->check_session()){
			$data['blogs'] =$this->Blog_model->get_blog();

			$this->load->view('header');
			$this->load->view('blog/blog_view' ,$data);
			$this->load->view('footer');
		}else{
			$msg=0;
			redirect('Home/index/'.$msg);
		}
    }
    private function set_upload_options($path_folder=NULL)
    {   
        //upload an image options
        $config = array();
        $config['upload_path'] = '././assets/images/' . $path_folder . '/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['max_size']      = '0';
        $config['overwrite']     = FALSE;

        return $config;
    }    


    public function insert_blog(){
		date_default_timezone_set('America/Los_Angeles');

		$created_at = date('Y-m-d H:i:s a', time());   
	 
		if ($_FILES['photo_name']['name'] != "") {
        
            $path_folder = 'gallery-grid';
            
            $this->upload->initialize($this->set_upload_options($path_folder));
		
		if (!$this->upload->do_upload('photo_name')) {
				$photo_name = $this->upload->display_errors();
		}else{
			$data = array('upload_data' => $this->upload->data());
			$photo_name = $data['upload_data']['file_name'];
                
		   $data = array(
			'photo_blog' => $photo_name, 
			'titel_blog' => $this->input->post('titel_blog'), 
			'description_blog' => $this->input->post('description_blog'), 
			'created_at' => $created_at, 			   
		);
			
                  }
      	   }else{
			
		   $data = array(
			'titel_blog' => $this->input->post('titel_blog'), 
			'description_blog' => $this->input->post('description_blog'), 
			'created_at' => $created_at, 			   
		);
			
                  }
			
        $this->db->insert('blog', $data);
        redirect('Blog/');
      	   }
           

    public function edit_blog($blog_id=NULL)
    {
		if($this->Home_model->check_session()){
			$data['blog']=$this->Blog_model->get_one_blog($blog_id);
			$this->load->view('header');
			$this->load->view('blog/blog_edit_view', $data);
			$this->load->view('footer');
		}else{
			$msg=0;
			redirect('Home/index/'.$msg);
		}
    }


    public function update_blog(){
		if ($_FILES['photo_name']['name'] != "") {
        
            $path_folder = 'gallery-grid';
            
            $this->upload->initialize($this->set_upload_options($path_folder));
		
		if (!$this->upload->do_upload('photo_name')) {
				$photo_name = $this->upload->display_errors();
		}else{
			$data = array('upload_data' => $this->upload->data());
			$photo_name = $data['upload_data']['file_name'];
                
		   $data = array(
			'photo_blog' => $photo_name, 
			'titel_blog' => $this->input->post('titel_blog'), 
			'description_blog' => $this->input->post('description_blog'), 

			   
		);
			
                  }
      	   }else{
			
		   $data = array(
			'titel_blog' => $this->input->post('titel_blog'), 
			'description_blog' => $this->input->post('description_blog'), 
			   
		);
			
		}
        $this->db->where('blog_id',$this->input->post('blog_id'));
        $this->db->update('blog', $data);
        redirect('Blog/');
		
		
    }       
    
    
    

      public function delete_blog($blog_id=NULL)
      {
          $this->db->where('blog_id', $blog_id);
          $this->db->delete('blog');
    
        redirect('Blog/');
        }

      public function delete_blog_sess($blog_id=NULL)
      {
          $this->db->where('blog_id', $blog_id);
          $this->db->delete('blog');
    
        redirect('Blog/search_sess_result_blog');
        }

	
	 public function search_blog(){
		if($this->Home_model->check_session()){
			$this->load->view('header');
			$this->load->view('blog/blog_search_view');
			$this->load->view('footer');
		}else{
			$msg=0;
			redirect('Home/index/'.$msg);
		}
	 }
	 
	 public function search_result_blog(){
		if($this->Home_model->check_session()){
			$data['blog_search']=$this->Blog_model->search_blog();

			$this->load->view('header');
			$this->load->view('blog/blog_search_result_view',$data);
			$this->load->view('footer');
		}else{
			$msg=0;
			redirect('Home/index/'.$msg);
		}
	 }

	 public function search_sess_result_blog(){
		if($this->Home_model->check_session()){
			$data['blog']=$this->Blog_model->search_resul_ses();

			$this->load->view('header');
			$this->load->view('blog/blog_search_sess_result_view',$data);
			$this->load->view('footer');
		}else{
			$msg=0;
			redirect('Home/index/'.$msg);
		}
	 }

    public function edit_blog_sess($blog_id=NULL)
    {
		if($this->Home_model->check_session()){
			$data['blog']=$this->Blog_model->get_one_blog($blog_id);
			$this->load->view('header');
			$this->load->view('blog/blog_edit_sess_view', $data);
			$this->load->view('footer');
		}else{
			$msg=0;
			redirect('Home/index/'.$msg);
		}
    }


    public function update_blog_sess(){
		if ($_FILES['photo_name']['name'] != "") {
        
            $path_folder = 'gallery-grid';
            
            $this->upload->initialize($this->set_upload_options($path_folder));
		
		if (!$this->upload->do_upload('photo_name')) {
				$photo_name = $this->upload->display_errors();
		}else{
			$data = array('upload_data' => $this->upload->data());
			$photo_name = $data['upload_data']['file_name'];
                
		   $data = array(
			'photo_blog' => $photo_name, 
			'titel_blog' => $this->input->post('titel_blog'), 
			'description_blog' => $this->input->post('description_blog'), 

			   
		);
			
                  }
      	   }else{
			
		   $data = array(
			'titel_blog' => $this->input->post('titel_blog'), 
			'description_blog' => $this->input->post('description_blog'), 
			   
		);
			
		}
        $this->db->where('blog_id',$this->input->post('blog_id'));
        $this->db->update('blog', $data);
        redirect('Blog/search_sess_result_blog');
		
		
    }       
    
}?>
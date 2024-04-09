<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class We_serve extends CI_Controller {

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
	  $this->load->model('We_serve_model');
		        $this->load->model("Home_model");

 	 }
	
	//////////////////////industries_we_serve////////////////////////
		public function edit_we_serve(){
			if($this->Home_model->check_session()){
			  $data['industries']=$this->We_serve_model->get_we_serve();
			  $this->load->view('header');
			  $this->load->view('we_serve/we_serve_view',$data);
			  $this->load->view('footer');		
		    }else{
							$msg=0;
			redirect('Home/index/'.$msg);}}

		public function update_we_serve(){
			$data=array(
				'title'   	 		=>$this->input->post('title'),
				'short_title' =>$this->input->post('short_title'),
				'long_title'	=>$this->input->post('long_title'),
			);
			$this->db->where('we_serve_id',1);
			$this->db->update('industries_we_serve',$data);
			redirect('We_serve/edit_we_serve');
		}
	
	///////////////////////industries_content/////////////////////////

		public function get_content(){
			if($this->Home_model->check_session()){
			$data['content']=$this->We_serve_model->get_content();
			$data['industries']=$this->We_serve_model->get_we_serve();
			$this->load->view('header');
			$this->load->view('we_serve/get_content_view',$data);
			$this->load->view('footer');	
		}else{
							$msg=0;
			redirect('Home/index/'.$msg);}}	

		private function set_upload_options($path_folder)
		 {   
	//        upload an image options
			$config = array();
			$config['upload_path']   = '././assets/images/' . $path_folder . '/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
			$config['max_size']      = '0';
			$config['overwrite']     = FALSE;
			return $config;
		 }
	
	
		public function insert_content(){
		  	$logo='';
			$photo_1='';
			$photo_2='';
			if ($_FILES['userfiles']['name'] != "") {

				$path_folder = 'business';
				$this->upload->initialize($this->set_upload_options($path_folder));

				if (!$this->upload->do_upload('userfiles')) {
					$photo_1 = $this->upload->display_errors();

				}else{
					$data = array('upload_data' => $this->upload->data());
					$photo_1 = $data['upload_data']['file_name'];
				}
			}

			if ($_FILES['userfiles2']['name'] != "") {

				$path_folder = 'business';
				$this->upload->initialize($this->set_upload_options($path_folder));
				if (!$this->upload->do_upload('userfiles2')) {
					$logo = $this->upload->display_errors();

				}else{
					$data = array('upload_data' => $this->upload->data());
					$logo = $data['upload_data']['file_name'];
				}
			} 
			
			if ($_FILES['userfiles3']['name'] != "") {

				$path_folder = 'business';
				$this->upload->initialize($this->set_upload_options($path_folder));
				if (!$this->upload->do_upload('userfiles3')) {
					$photo_2 = $this->upload->display_errors();

				}else{
					$data = array('upload_data' => $this->upload->data());
					$photo_2 = $data['upload_data']['file_name'];
				}
			} 

				$data =array(
					'we_serve_id'=>1,
					'title'   	 			=>$this->input->post('title'),
					'short_description' 	=>$this->input->post('short_description'),
					'long_description'		=>$this->input->post('long_description'),
					'photo_1' 				=>$photo_1,
					'title_photo_1' 		=>$this->input->post('title_photo_1'),
					'photo_description_1' 	=>$this->input->post('photo_description_1'),
					'photo_2' 				=>$photo_2,
					'title_photo_2' 		=>$this->input->post('title_photo_2'),
					'photo_description_2' 	=>$this->input->post('photo_description_2'),
					'logo' 					=>$logo,
					);
				   $this->db->insert('industries_content',$data);
					redirect('We_serve/get_content');

		
		}

		public function edit_content($title_after,$industries_id){
//			$title_after=str_replace(" ","-",$title_before);
			$data['edit_content']=$this->We_serve_model->edit_content($industries_id);
			$this->load->view('header');
			$this->load->view('we_serve/edit_content_view', $data);
			$this->load->view('footer');
		}

		public function update_content(){
			$logo='';
			$photo_1='';
			$photo_2='';
			if ($_FILES['userfiles']['name'] != "") {

				$path_folder = 'business';
				$this->upload->initialize($this->set_upload_options($path_folder));

				if (!$this->upload->do_upload('userfiles')) {
					$photo_1 = $this->upload->display_errors();

				}else{
					$data = array('upload_data' => $this->upload->data());
					$photo_1 = $data['upload_data']['file_name'];
				}
			}else{
				$photo_1=$this->input->post('photo_1');
			}

			if ($_FILES['userfiles2']['name'] != "") {

				$path_folder = 'business';
				$this->upload->initialize($this->set_upload_options($path_folder));
				if (!$this->upload->do_upload('userfiles2')) {
					$logo = $this->upload->display_errors();

				}else{
					$data = array('upload_data' => $this->upload->data());
					$logo = $data['upload_data']['file_name'];
				}
			}else{
				$logo=$this->input->post('logo');
			}
			if ($_FILES['userfiles3']['name'] != "") {

				$path_folder = 'business';
				$this->upload->initialize($this->set_upload_options($path_folder));
				if (!$this->upload->do_upload('userfiles3')) {
					$photo_2 = $this->upload->display_errors();

				}else{
					$data = array('upload_data' => $this->upload->data());
					$photo_2 = $data['upload_data']['file_name'];
				} 
			}else{
				$photo_2=$this->input->post('$photo_2');
			}

				$data =array(
					'we_serve_id'=>1,
					'title'   	 			=>$this->input->post('title'),
					'short_description' 	=>$this->input->post('short_description'),
					'long_description'		=>$this->input->post('long_description'),
					'photo_1' 				=>$photo_1,
					'title_photo_1' 		=>$this->input->post('title_photo_1'),
					'photo_description_1' 	=>$this->input->post('photo_description_1'),
					'photo_2' 				=>$photo_2,
					'title_photo_2' 		=>$this->input->post('title_photo_2'),
					'photo_description_2' 	=>$this->input->post('photo_description_2'),
					'logo' 					=>$logo,
					);
				$this->db->where('industries_id',$this->input->post('industries_id'));
				$this->db->update('industries_content',$data);

				$x=$this->input->post('industries_id');
				$data_sess=array(
				"title$x"=>$this->input->post('title'),
				);
				$this->session->set_userdata($data_sess);

				$title=trim($this->input->post('title'));
				$title=str_replace(", ","-",$title);
				$title=str_replace("/","-",$title);
				$title_after=str_replace(" ","-",$title);

				redirect('We_serve/edit_content/'.$title_after.'/'.$this->input->post('industries_id'));

		}

		public function delete_content($industries_id){
			$this->db->where('industries_id',$industries_id);
			$this->db->delete('industries_content');
			redirect('We_serve/get_content');
		}

			
			
 		}?>


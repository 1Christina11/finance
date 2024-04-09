<?php defined('BASEPATH') OR exit('No direct script access allowed');

		class Loan_solution extends CI_Controller{

			public function __Construct(){
				parent::__Construct();
				$this->load->model('Loan_solution_model');
				        $this->load->model("Home_model");

			}
			//////////////////////business_loan_solution///////////////////////////
			public function edit_loan_solution(){
						if($this->Home_model->check_session()){

				$data['loan_solution']=$this->Loan_solution_model->get_loan_solution();
				
				$this->load->view('header');
				$this->load->view('loan_solution/loan_solution_view',$data);
				$this->load->view('footer');
			}else{
							$msg=0;
			redirect('Home/index/'.$msg);}
			}
			
			public function update_loan_solution(){
				$data=array(
					'title'=>$this->input->post('title'),
					'short_title'=>$this->input->post('short_title'),
					'long_title'=>$this->input->post('long_title'),
				);
				
				$this->db->where('loan_solution_id',1);
				$this->db->update('business_loan_solution',$data);
				redirect('Loan_solution/edit_loan_solution');
			}
			//////////////////////loan_content/////////////////////////////////////
			public function get_content(){
										if($this->Home_model->check_session()){
				$data['content']=$this->Loan_solution_model->get_content();
				$data['loan_solution']=$this->Loan_solution_model->get_loan_solution();
				
				$this->load->view('header');
				$this->load->view('loan_solution/get_content_view',$data);
				$this->load->view('footer');
				}else{
							$msg=0;
			redirect('Home/index/'.$msg);}
			}
			//////////////////////private_func to upload///////////////////////////
			private function set_upload_options($path_folder)
			{   
				//upload an image options
				$config['upload_path'] = './assets/images/' . $path_folder . '/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
				$config['max_size']      = '0';
				$config['overwrite']     = FALSE;

				return $config;
			}
			
			public function insert_content(){
				date_default_timezone_set('America/Mexico_City');
				$created_at = date('Y-m-d h:i:s a', time());
				$photo1='';
				$photo2='';
				$logo='';
				if ($_FILES['userfiles']['name'] != ""){
					$path_folder = 'loan';
					$this->upload->initialize($this->set_upload_options($path_folder));
					if (!$this->upload->do_upload('userfiles')) {
						$photo1 = $this->upload->display_errors();
					}else{
						$data = array('upload_data' => $this->upload->data());
						$photo1 = $data['upload_data']['file_name'];
					}
				}
				if ($_FILES['userfiles2']['name'] != ""){
					$path_folder = 'loan';
					$this->upload->initialize($this->set_upload_options($path_folder));
					if (!$this->upload->do_upload('userfiles2')) {
						$logo = $this->upload->display_errors();
					}else{
						$data = array('upload_data' => $this->upload->data());
						$logo = $data['upload_data']['file_name'];
					}
				}
				if ($_FILES['userfiles3']['name'] != ""){
					$path_folder = 'loan';
					$this->upload->initialize($this->set_upload_options($path_folder));
					if (!$this->upload->do_upload('userfiles2')) {
						$photo2 = $this->upload->display_errors();
					}else{
						$data = array('upload_data' => $this->upload->data());
						$photo2 = $data['upload_data']['file_name'];
					}
				}  
				$data =array(
					'loan_solution_id'=>1,
					'title'=>$this->input->post('title'),
					'short_description'=>$this->input->post('short_description'),
					'long_description'=>$this->input->post('long_description'),
					'title_photo_1'=>$this->input->post('title_photo_1'),
					'photo_description_1'=>$this->input->post('photo_description_1'),
					'photo_1'=>$photo1,
					'title_photo_2'=>$this->input->post('title_photo_2'),
					'photo_description_2'=>$this->input->post('photo_description_2'),
					'photo_2'=>$photo2,
					'logo'=>$logo,
					'created_at'=>$created_at,
				);
				$this->db->insert('loan_content', $data);
				
				redirect('Loan_solution/get_content');
			}
			
			public function edit_content($title_after,$loan_id){
				$data['content']=$this->Loan_solution_model->edit_content($loan_id);
				$this->load->view('header');
				$this->load->view('loan_solution/edit_content_view',$data);
				$this->load->view('footer');
			}
			
			
			public function update_content(){
				if ($_FILES['userfiles']['name'] != ""){
					$path_folder = 'loan';
					$this->upload->initialize($this->set_upload_options($path_folder));
					if (!$this->upload->do_upload('userfiles')) {
						$photo1 = $this->upload->display_errors();
					}else{
						$data = array('upload_data' => $this->upload->data());
						$photo1 = $data['upload_data']['file_name'];
					}
				}else{
					$photo1 = $this->input->post('photo1');
				}
				if ($_FILES['userfiles2']['name'] != ""){
					$path_folder = 'loan';
					$this->upload->initialize($this->set_upload_options($path_folder));
					if (!$this->upload->do_upload('userfiles2')) {
						$logo = $this->upload->display_errors();
					}else{
						$data = array('upload_data' => $this->upload->data());
						$logo = $data['upload_data']['file_name'];
					}
				}else{
					$logo = $this->input->post('logo');
				}
				if ($_FILES['userfiles3']['name'] != ""){
					$path_folder = 'loan';
					$this->upload->initialize($this->set_upload_options($path_folder));
					if (!$this->upload->do_upload('userfiles3')) {
						$photo2 = $this->upload->display_errors();
					}else{
						$data = array('upload_data' => $this->upload->data());
						$photo2 = $data['upload_data']['file_name'];
					}
				}else{
					$photo2 = $this->input->post('photo2');
				}  
				$data =array(
					'loan_solution_id'=>1,
					'title'=>$this->input->post('title'),
					'short_description'=>$this->input->post('short_description'),
					'long_description'=>$this->input->post('long_description'),
					'title_photo_1'=>$this->input->post('title_photo_1'),
					'photo_description_1'=>$this->input->post('photo_description_1'),
					'photo_1'=>$photo1,
					'title_photo_2'=>$this->input->post('title_photo_2'),
					'photo_description_2'=>$this->input->post('photo_description_2'),
					'photo_2'=>$photo2,
					'logo'=>$logo,
				);
				$this->db->where('loan_id', $this->input->post('loan_id'));
				$this->db->update('loan_content', $data);
				
				$x=$this->input->post('loan_id');
				$data_sess=array(
				"title$x"=>$this->input->post('title'),
				);
				$this->session->set_userdata($data_sess);
				
				$title=trim($this->input->post('title'));
				$title=str_replace(", ","-",$title);
				$title=str_replace("/","-",$title);
				$title_after=str_replace(" ","-",$title);
				
				redirect('Loan_solution/edit_content/'.$title_after.'/'.$this->input->post('loan_id'));
			}
			
			public function delete_content($loan_id){
				$this->db->where('loan_id',$loan_id);
				$this->db->delete('loan_content');
				
				redirect('Loan_solution/get_content');
			}
			
			public function data(){
				echo json_encode($data['loan_content']=$this->Loan_solution_model->get_content());
			}
				
 		}?>

<?php defined('BASEPATH') OR exit('No direct script access allowed');

	 class Slider_nav extends CI_Controller{
		 
		public function __Construct()
		{
			parent::__Construct();
			$this->load->model('Slider_nav_model');
			        $this->load->model("Home_model");

		}

		public function get_sliders(){
			if($this->Home_model->check_session()){
			    $data['sliders']=$this->Slider_nav_model->get_all_sliders();
			    $this->load->view('header');
				$this->load->view('slider/slider_view',$data);
				$this->load->view('footer');
			}else{
							$msg=0;
			redirect('Home/index/'.$msg);}
		}
		 //////////////////////////////////upload_praivte_func////////////////////////////////////
		private function set_upload_options($path_folder){
			//upload an image options
			$config['upload_path'] = '././assets/images/' . $path_folder . '/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
			$config['max_size']      = '0';
			$config['overwrite']     = FALSE;

			return $config;
		} 
		 //////////////////////////////////upload_praivte_func////////////////////////////////////
		public function update_sliders(){

			if ($_FILES['userfiles_1']['name'] != ""){

				$path_folder = 'loan';

				$this->upload->initialize($this->set_upload_options($path_folder));

				if (!$this->upload->do_upload('userfiles_1')) {
					$photo_1 = $this->upload->display_errors();
				}else{
					$data = array('upload_data' => $this->upload->data());
					$photo_1 = $data['upload_data']['file_name'];
				}
			}else{
				$photo_1=$this->input->post('photo_1');
			}
			if ($_FILES['userfiles_2']['name'] != ""){

				$path_folder = 'loan';

				$this->upload->initialize($this->set_upload_options($path_folder));

				if (!$this->upload->do_upload('userfiles_2')) {
					$photo_2 = $this->upload->display_errors();
				}else{
					$data = array('upload_data' => $this->upload->data());
					$photo_2 = $data['upload_data']['file_name'];
				}
			}else{
				$photo_2=$this->input->post('photo_2');
			}
			if ($_FILES['userfiles_3']['name'] != ""){

				$path_folder = 'loan';

				$this->upload->initialize($this->set_upload_options($path_folder));

				if (!$this->upload->do_upload('userfiles_3')) {
					$photo_3 = $this->upload->display_errors();
				}else{
					$data = array('upload_data' => $this->upload->data());
					$photo_3 = $data['upload_data']['file_name'];
				}
			}else{
				$photo_3=$this->input->post('photo_3');
			}
			if ($_FILES['userfiles_4']['name'] != ""){

				$path_folder = 'loan';

				$this->upload->initialize($this->set_upload_options($path_folder));

				if (!$this->upload->do_upload('userfiles_4')){
					$photo_4 = $this->upload->display_errors();
				}else{
					$data = array('upload_data' => $this->upload->data());
					$photo_4 = $data['upload_data']['file_name'];
				}
			}else{
				$photo_4=$this->input->post('photo_4');
			}
				$data =array(
					'description_1'=>$this->input->post('description_1'),
					'description_2'=>$this->input->post('description_2'),
					'description_3'=>$this->input->post('description_3'),
					'description_4'=>$this->input->post('description_4'),
					'title_1'=>$this->input->post('title_1'),
					'title_2'=>$this->input->post('title_2'),
					'title_3'=>$this->input->post('title_3'),
					'title_4'=>$this->input->post('title_4'),
					'photo_1'=>$photo_1,
					'photo_2'=>$photo_2,
					'photo_3'=>$photo_3,
					'photo_4'=>$photo_4
				);
				$this->db->where('slider_id', 1);
				$this->db->update('slider', $data);
				redirect('Slider_nav/get_sliders');

		}
	 }?>
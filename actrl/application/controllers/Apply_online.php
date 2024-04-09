<?php defined("BASEPATH") or exit("No direct script access allowed");

class Apply_online extends CI_Controller
{
    public function __construct()
    {
        parent::__Construct();
        $this->load->model("Apply_onilne_model");
        $this->load->model("Home_model");
    }
    ////////////////////////////////////////////////////Apply_online//////////////////////////////////////////////////////////////////////
    public function edit_apply_online()
    {
		if($this->Home_model->check_session()){
			$data["apply_online"] = $this->Apply_onilne_model->get_apply_online();

			$this->load->view("header");
			$this->load->view("apply_online/apply_online_view", $data);
			$this->load->view("footer");
		}else{
			$msg=0;
			redirect('Home/index/'.$msg);
		}
    }

    public function update_apply_online()
    {
        $data = [
            "head_title" => $this->input->post("head_title"),
            "title" => $this->input->post("title"),
            "description" => $this->input->post("description"),
        ];

        $this->db->where("online_id", 1);
        $this->db->update("apply_online", $data);

        redirect("Apply_online/edit_apply_online");
    }
    ////////////////////////////////////////////////////////////////online_content////////////////////////////////////////////////////////
    
	
				public function get_content(){
		if($this->Home_model->check_session()){
			$data["online_content"] = $this->Apply_onilne_model->get_content();
			$data["apply_online"] = $this->Apply_onilne_model->get_apply_online();
				
				$this->load->view('header');
			$this->load->view("apply_online/get_content_view", $data);
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

				if ($_FILES['userfile']['name'] != "") {

				$path_folder = 'apply';
				$this->upload->initialize($this->set_upload_options($path_folder));

				if (!$this->upload->do_upload('userfile')) {
					$logo = $this->upload->display_errors();

				}else{

					$data = array('upload_data' => $this->upload->data());
					$logo = $data['upload_data']['file_name'];

				}

				$data = array(
					 "online_id" => 1,
                    "description" => $this->input->post("description"),
                    "cta" => $this->input->post("cta"),
                    "title" => $this->input->post("title"),
                    "item_1" => $this->input->post("item_1"),
                    "item_2" => $this->input->post("item_2"),
                    "item_3" => $this->input->post("item_3"),
                    "item_4" => $this->input->post("item_4"),
                    "logo" => $logo,
							 );

			}else{

				$data = array(
				 "online_id" => 1,
                    "description" => $this->input->post("description"),
                    "cta" => $this->input->post("cta"),
                    "title" => $this->input->post("title"),
                    "item_1" => $this->input->post("item_1"),
                    "item_2" => $this->input->post("item_2"),
                    "item_3" => $this->input->post("item_3"),
                    "item_4" => $this->input->post("item_4"),
							 );

			}
			
        $this->db->insert("online_content", $data);

        redirect("Apply_online/get_content");
			}
	
			

	
			
			




    public function edit_content($content_id)
    {
		if($this->Home_model->check_session()){;
			$data["online_content"] = $this->Apply_onilne_model->get_one_content($content_id);

			$this->load->view("header");
			$this->load->view("apply_online/edit_content_view", $data);
			$this->load->view("footer");
		}else{
			$msg=0;
			redirect('Home/index/'.$msg);
		}
    }
			public function update_content(){


			if ($_FILES['userfile']['name'] != "") {

				$path_folder = 'apply';
				$this->upload->initialize($this->set_upload_options($path_folder));

				if (!$this->upload->do_upload('userfile')) {
					$logo = $this->upload->display_errors();

				}else{

					$data = array('upload_data' => $this->upload->data());
					$logo = $data['upload_data']['file_name'];

				}

				$data = array(
					"description" => $this->input->post("description"),
                    "cta" => $this->input->post("cta"),
                    "title" => $this->input->post("title"),
                    "item_1" => $this->input->post("item_1"),
                    "item_2" => $this->input->post("item_2"),
                    "item_3" => $this->input->post("item_3"),
                    "item_4" => $this->input->post("item_4"),
                    "logo" => $logo,
							 );

			}else{

				$data = array(
				"description" => $this->input->post("description"),
                    "cta" => $this->input->post("cta"),
                    "title" => $this->input->post("title"),
                    "item_1" => $this->input->post("item_1"),
                    "item_2" => $this->input->post("item_2"),
                    "item_3" => $this->input->post("item_3"),
                    "item_4" => $this->input->post("item_4"),
							 );

			}
			
						
		    $this->db->where('content_id',$content_id);
			$this->db->update('online_content', $data);
			
				redirect('Apply_online/get_content');

		}
       	



	
    public function delete_content($content_id)
    {
        $this->db->where("content_id", $content_id);
        $this->db->delete("online_content");

        redirect("Apply_online/get_content");
    }
    /////////////////////////////////////////////////////////////////business_loans///////////////////////////////////////////////////////////////////
    public function get_loans()
    {
		if($this->Home_model->check_session()){
			$data["business_loans"] = $this->Apply_onilne_model->get_loans();

			$this->load->view("header");
			$this->load->view("apply_online/get_loans_view", $data);
			$this->load->view("footer");
		}else{
			$msg=0;
			redirect('Home/index/'.$msg);
		}
    }

    public function delete_loans($loans_id)
    {
        $this->db->where("loans_id", $loans_id);
        $this->db->delete("business_loans");

        redirect("Apply_online/get_loans");
    }

    public function loans_search()
    {
		if($this->Home_model->check_session()){
			$this->load->view("header");
			$this->load->view("apply_online/search_loans_view");
			$this->load->view("footer");
		}else{
			$msg=0;
			redirect('Home/index/'.$msg);
		}
    }

    public function loans_search_result()
    {
		if($this->Home_model->check_session()){
        $data["business_loans"] = $this->Apply_onilne_model->search_loans();

        $this->load->view("header");
        $this->load->view("apply_online/search_result_view", $data);
        $this->load->view("footer");
		}else{
			$msg=0;
			redirect('Home/index/'.$msg);
		}
    }
    public function loans_search_result_ses()
    {
		if($this->Home_model->check_session()){
        $data["business_loans"] = $this->Apply_online_model->search_resul_ses();

        $this->load->view("header");
        $this->load->view("apply_online/search_result_view", $data);
        $this->load->view("footer");
		}else{
			$msg=0;
			redirect('Home/index/'.$msg);
		}
    }
} ?>

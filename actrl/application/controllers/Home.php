<?php defined('BASEPATH') OR exit('No direct script access allowed');

		class Home extends CI_Controller {
			
			public function __Construct(){
				parent::__Construct();
				$this->load->model('Home_model');
			}
			
			public function index($msg = NULL){
				$msg=NULL;
				$data['msg'] = $msg;
				if($msg==2){
					$data['msg']='maybe your email or password is empty';
				}
				if($msg==1){
					$data['msg']='maybe your email or password is incorrect';
				}
				if($msg==0){
					$data['msg']='we need your email and password please';
				}
				$this->load->view('login_view', $data);
			}
			
			public function login(){
				if($this->input->post('email')!='' && $this->input->post('password')!=''){
					if($this->input->post('email')=='finance@gmail.com' && sha1($this->input->post('password'))==sha1('ZeF59_@-.PoA!')){
						$datasess=array(
							'email'=>'finance@gmail.com',
							'password'=>sha1('ZeF59_@-.PoA!')
						);
						$this->session->set_userdata($datasess);
						redirect('Home/home');
					}else{
						$msg=1;
						redirect('Home/index/'.$msg);
					}
				}else{
					$msg=2;
					redirect('Home/index/'.$msg);
				}
			}
			
			public function home(){
				if($this->Home_model->check_session()){
					$this->load->view('header');
					$this->load->view('footer');
				}else{
					$msg=0;
					redirect('Home/index/'.$msg);
				}
			}
			
			public function destroy_session(){
				session_destroy();
				redirect('Home/index');
			}
 		}?>

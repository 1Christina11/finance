<?php defined('BASEPATH') OR exit('No direct script access allowed');

		class Home_model extends CI_Model{
			
			public function check_session(){
				if($this->session->userdata('email')=='finance@gmail.com' && $this->session->userdata('password')==sha1('ZeF59_@-.PoA!')){
					return true;
				}else{
					return false;
				}
			}

			
}?>
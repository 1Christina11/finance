<?php defined('BASEPATH') OR exit('No direct script access allowed');

		class We_serve_model extends CI_model{
			
			public function get_we_serve(){
				$this->db->where('we_serve_id',1);
				$query=$this->db->get('industries_we_serve');
				return $query->result();
			}
			
			public function get_content(){
				$query=$this->db->get('industries_content');
				return $query->result();
			}
			
			public function get_one_content($industries_id){
				
				$this->db->where('title',$this->session->userdata("title$industries_id"));
				$query=$this->db->get('industries_content');
				return $query->row();
			}
		}?>

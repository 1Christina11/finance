<?php defined('BASEPATH') OR exit('No direct script access allowed');

		class Home_model extends CI_Model{
			
			public function sliders(){
				$this->db->where('slider_id',1);
				$query=$this->db->get('slider');

				return $query->result();
			}

			
}?>
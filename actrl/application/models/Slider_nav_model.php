<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class Slider_nav_model extends CI_Model{

    public function get_all_sliders(){
		$this->db->where('slider_id',1);
		$query=$this->db->get('slider');
		
		return $query->result();
    }
     

 }?>
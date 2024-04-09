<?php defined ('BASEPATH') OR exit('No direct script access allowed');


class We_serve_model extends CI_Model {

     function __construct()
    {
        parent::__construct();
    }

	public function get_we_serve(){
		$this->db->where('we_serve_id',1);
		$query =$this->db->get('industries_we_serve');
		return $query->result();

	}

	public function get_content(){
		$query =$this->db->get('industries_content');
		return $query->result();

	}

	public function edit_content($industries_id){
//		$title_before=str_replace("-"," ",$title_after);
		$this->db->where('title',$this->session->userdata("title$industries_id"));
		$query =$this->db->get('industries_content');
		return $query->result();

	}	

			
			
	}?>


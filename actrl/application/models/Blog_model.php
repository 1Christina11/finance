<?php defined('BASEPATH') OR exit('NO direct script access allowed');

class Blog_model extends CI_MOdel{
    


    public function get_blog(){

    $query=$this->db->get('blog');
    return $query->result();

    }

    public function get_one_blog($blog_id){
        $this->db->where('blog_id', $blog_id);
        $query=$this->db->get('blog');
        return $query->row();
    
        }


     public function search_blog(){

		$date_to      = $this->input->post('date_to');        
		$date_from    = $this->input->post('date_from');
		
		///////////////////// set session 
		$sesseadata = array(
							'date_to'     =>$date_to ,       
							'date_from'   =>$date_from,
						    );
         $this->session->set_userdata($sesseadata);
		
		if($date_from != ""){
			$this->db->where('created_at >=',$date_from);
		}

		if($date_to != ""){
			$this->db->where('created_at <=',$date_to);
		}


        $query = $this->db->get('blog');
        return $query->result();
    }
    public function search_resul_ses(){
		
		$date_to      = $this->session->userdata('date_to');
		$date_from    = $this->session->userdata('date_from');
		
        
		if($date_from != ""){
			$this->db->where('created_at >=',$date_from);
		}
		if($date_to != ""){
			$this->db->or_where('created_at <=',$date_to);
		}

        $query = $this->db->get('blog');
        return $query->result();
		
	}

}?>
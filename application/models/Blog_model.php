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
 

 
}?>
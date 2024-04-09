<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privacy_policy_model extends CI_Model{

	public function get_privacy_policy(){
		$query = $this->db->get('privacy_policy');
		return $query->result();
	}
}?>

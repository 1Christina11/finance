<?php defined('BASEPATH') OR exit('No direct script access allowed');

		class Loan_solution_model extends CI_model{
			
			public function get_loan_solution(){
				$this->db->where('loan_solution_id',1);
				$query=$this->db->get('business_loan_solution');
				return $query->result();
			}
			
			public function get_content(){
				$this->db->order_by('loan_id', 'desc');
				$query=$this->db->get('loan_content');
				return $query->result();
			}
			
			public function edit_content($loan_id){
				$this->db->where('title',$this->session->userdata("title$loan_id"));
				$query=$this->db->get('loan_content');
				return $query->result();
			}
		}?>


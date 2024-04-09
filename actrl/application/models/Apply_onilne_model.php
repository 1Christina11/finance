<?php defined("BASEPATH") or exit("No direct script access allowed");

class Apply_onilne_model extends CI_model
{
    public function get_apply_online()
    {
        $this->db->where("online_id", 1);
        $query = $this->db->get("apply_online");
        return $query->row();
    }

    ////////////////////////////////////////////////////////////////////online_content///////////////////////////////////////////////////////////////

    public function get_content()
    {
        $query = $this->db->get("online_content");
        return $query->result();
    }

    
 public function get_one_content($content_id){
        $this->db->where('content_id', $content_id);
        $query=$this->db->get('online_content');
        return $query->row();
    
        }
    /////////////////////////////////////////////////////////////////////business_loans///////////////////////////////////////////////////////

    public function get_loans()
    {
        $query = $this->db->get("business_loans");
        return $query->result();
    }

    public function search_loans()
    {
        $name = $this->input->post("name");
        $phone = $this->input->post("phone");
        $email = $this->input->post("email");
        $time_in_business = $this->input->post("time_in_business");
        $credit_score = $this->input->post("credit_score");
        $monthly_revenue = $this->input->post("monthly_revenue");

        ///////////////////// set session ///////////////////////
        $sessloans = [
            "name" => $name,
            "phone" => $phone,
            "email" => $email,
            "time_in_business" => $time_in_business,
            "credit_score" => $credit_score,
            "monthly_revenue" => $monthly_revenue,
        ];
        $this->session->set_userdata($sessloans);

        if ($name != "") {
            $this->db->where("name", $name);
        }
        if ($phone != "") {
            $this->db->where("phone", $phone);
        }
        if ($email != "") {
            $this->db->where("email", $email);
        }
        if ($time_in_business != "") {
            $this->db->where("time_in_business", $time_in_business);
        }
        if ($credit_score != "") {
            $this->db->where("credit_score", $credit_score);
        }
        if ($monthly_revenue != "") {
            $this->db->where("monthly_revenue", $monthly_revenue);
        }

        $query = $this->db->get("business_loans");
        return $query->result();
    }
    public function search_resul_ses()
    {
        $name = $this->input->post("name");
        $phone = $this->input->post("phone");
        $email = $this->input->post("email");
        $time_in_business = $this->input->post("time_in_business");
        $credit_score = $this->input->post("credit_score");
        $monthly_revenue = $this->input->post("monthly_revenue");

        if ($name != "") {
            $this->db->where("name", $name);
        }
        if ($phone != "") {
            $this->db->where("phone", $phone);
        }
        if ($email != "") {
            $this->db->where("email", $email);
        }
        if ($time_in_business != "") {
            $this->db->where("time_in_business", $time_in_business);
        }
        if ($credit_score != "") {
            $this->db->where("credit_score", $credit_score);
        }
        if ($monthly_revenue != "") {
            $this->db->where("monthly_revenue", $monthly_revenue);
        }
        $query = $this->db->get("members");
        return $query->result();
    }

    //
}
?>


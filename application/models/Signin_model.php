<?php
class Signin_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function login($data) {
 //       $condition = "user_email ='".$email."' , user_password='".$password."'";
        $this->db->select('*');
        $this->db->from('ch_admin');
        $this->db->where('contact_email', $data['email']);
        $this->db->where('contact_password', $data['password']);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }
}
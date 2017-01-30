<?php
class Project_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function add($data) {
        $data = array(
            'project_name' => $this->input->post('name'),
            'user_password' => $this->input->post('starting'),
            'user_email' => $this->input->post('ending'),
            'user_sex' => $this->input->post('totalBudget'),
            'user_bio' => $this->input->post('ps'),
        );
        return $this->db->insert('ch_project', $data);
    }
}
<?php

class Login extends CI_Controller{
    
    public $Public_Vars = array();
    public $Sesson_Vars = array();
    public $Merged_Vars = array();
    
    
    public function __construct() {
        parent::__construct();
        $this->Public_Vars = $this->property();
        $this->Merged_Data = $this->Public_Vars;
        $this->Merged_Data['warning'] = FALSE;
        $this->Merged_Data['locked']  = FALSE;
        if($this->session->userdata('auth')){
           $this->Sesson_Vars   = $this->session->userdata('auth');
            if($this->Sesson_Vars['status'] == 1){
               redirect('dashboard','refresh');
            }
            else{
                redirect('homepage','refresh');
            }
        }
    }
    
    public function index($page = 'Project Management Software'){
                $this->Merged_Data['title'] =  ucfirst($page);
            if($this->input->post('trigger') == 'do_login'){
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('pwd', 'Password', 'required');
            if($this->form_validation->run() === FALSE){
                $this->session->set_flashdata('notification', errormessage(validation_errors()));
                $this->load->view(__CLASS__. '/' .__FUNCTION__,  $this->Merged_Vars);
            } else {
                $data_session = array( 'email' => $this->input->post('email'), 'password' => $this->input->post('pwd') );
                $result = $this->signin_model->login($data_session);
                if($result !== FALSE){
                $session_data = array(
                    'username' => $result->contact_name,
                    'email' => $result->contact_email,
                    'status' => $result->contact_status,
                );

                    $this->session->set_userdata('auth', $session_data);
                    if($result->contact_status == 1) {
                        redirect('dashboard', 'refresh');
                    } else {
                        redirect('login', 'refresh');
                    }
                } else {
                    $this->session->set_flashdata('notification', errormessage('Incorrect Username & Password'));
                    $this->load->view(__CLASS__. '/' .__FUNCTION__,  $this->Merged_Vars);
                    } 
            }
        } else {
                $this->load->view(__CLASS__. '/' .__FUNCTION__,  $this->Merged_Vars);
        }



    }
}

?>

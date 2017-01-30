<?php

class Project extends CI_Controller{
    
    
    public $Public_Vars = array();
    public $Sesson_Vars = array();
    public $Merged_Vars = array();
    
    public function __construct() {
        parent::__construct();
        if(!$this->session->userdata('auth')){
            redirect('login','refresh');
        }
        else{
            $this->Public_Vars = $this->property();
            $this->Sesson_Vars = $this->session->userdata('auth');
            if($this->Sesson_Vars['status'] != 1){
                redirect('login', 'refresh');
            }
            else{
                $this->Merged_Vars = array_merge($this->Public_Vars, $this->Sesson_Vars);
            }
        }
    }
    
    public function index(){
        $this->viewLoader(__CLASS__, __FUNCTION__, $this->Merged_Vars);
    }
    public function add(){
        
        $this->viewLoader(__CLASS__, __FUNCTION__, $this->Merged_Vars);
    }
       
}
?>

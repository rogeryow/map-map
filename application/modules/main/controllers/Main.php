<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller 
{

    function __construct() 
    {
        parent::__construct();
        $mdl=array(
            'main_model'=>'main_mdl'
        );
        $this->loader_model->loadMdl($mdl);
    }
    private function checkSession()
    {
        
    }
    public function index()
    {
		$data['template_type']="start";
		$this->load->view('includes/templates',$data);
    }
    public function developerMode()
    {
        $data['template_type']="developer_login";
		$this->load->view('includes/templates',$data);
    }
    public function adminMode()
    {
        $data['template_type']="admin_login";
		$this->load->view('includes/templates',$data);
    }
    public function teacherMode()
    {
        $data['template_type']="teacher_login";
		$this->load->view('includes/templates',$data);   
    }
    public function guidanceMode(){
        $data['template_type']="guidance_login";
		$this->load->view('includes/templates',$data);
    }

    public function adminRegister(){
        $data['template_type']="admin_register";
		$this->load->view('includes/templates',$data);
    }
    public function teacherRegister(){
        $data['template_type']="teacher_register";
		$this->load->view('includes/templates',$data);
    }

    public function guidanceRegister(){
        $data['template_type']="guidance_register";
		$this->load->view('includes/templates',$data);
    }


    public function logoutDeveloper()
    {
        $session = array('username','email','first_name','last_name','logged_in','userTyp');
        $this->session->unset_userdata($session);
        redirect('');
    }
    
    
}

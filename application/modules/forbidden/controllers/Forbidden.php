<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forbidden extends MY_Controller 
{

    function __construct() 
    {
        parent::__construct();
        $mdl=array(
            // 'main_model'=>'main_mdl'
        );
        $this->loader_model->loadMdl($mdl);
    }
    private function checkSession()
    {
        
    }
    public function index()
    {
		$data['main_content']='forbidden/index';
        $data['page_name']="Forbidden";
        $data['template_type']=$this->session->username;
        $this->load->view('includes/templates',$data);
    }
}
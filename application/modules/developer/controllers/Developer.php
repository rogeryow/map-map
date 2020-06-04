<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Developer extends MY_Controller 
{

    function __construct() 
    {
        parent::__construct();
        $mdl=array(
            // 'login_model'=>'login_mdl'
        );
        $this->loader_model->loadMdl($mdl);
    }
    public function index()
    {
        $data['main_content']='developer/index';
        $data['page_name']="Dashboard";
        $data['template_type']="developer";
        $this->load->view('includes/templates',$data);
    }
    
}

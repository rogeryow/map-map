<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller 
{

    function __construct() 
    {
        parent::__construct();
        $mdl=array(
            'login_model'=>'login_mdl'
        );
        $this->loader_model->loadMdl($mdl);
    }
    public function loginDeveloper()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $res = $this->login_mdl->loginDeveloper($email, $password);

        if($res)
        {
            $newdata = array(
                'admin_id'  => $res[0]->admin_id,
                'email' => $this->input->post('email'),
                'firstname' => $res[0]->firstname,
                'lastname' => $res[0]->lastname,
                'logged_in' => TRUE
            );
            
            $this->session->set_userdata($newdata);
        }

        echo json_encode(array('res' => $res));
    }
    public function loginAdmin()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $res = $this->login_mdl->loginAdmin($email, $password);
        if($res)
        {
            $newdata = array(
                'admin_id'  => $res[0]->administrator_id,
                'school_id'  => $res[0]->school_id,
                'email' => $this->input->post('email'),
                'firstname' => $res[0]->firstname,
                'lastname' => $res[0]->lastname,
                'username' => $res[0]->username,
                'logged_in' => TRUE
            );
            
            $this->session->set_userdata($newdata);
        }

        echo json_encode(array('res' => $res));
    }
    public function loginTeacher()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $res = $this->login_mdl->loginTeacher($email, $password);

        if($res)
        {
            $newdata = array(
                'teacher_id'  => $res[0]->teacher_id,
                'school_id'  => $res[0]->school_id,
                'email' => $this->input->post('email'),
                'username' => $res[0]->username,
                'firstname' => $res[0]->firstname,
                'lastname' => $res[0]->lastname,
                'subject_id' => $res[0]->subject_id,
                'logged_in' => TRUE,
                'adviser_id'=>$res[0]->adviser_id,
            );
            
            $this->session->set_userdata($newdata);
        }

        echo json_encode(array('res' => $res));
    }
    public function loginGuidance()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $res = $this->login_mdl->loginGuidance($email, $password);

        if($res)
        {
            $newdata = array(
                'guidance_id'  => $res[0]->guidance_id,
                'school_id'  => $res[0]->school_id,
                'email' => $this->input->post('email'),
                'username' => $res[0]->username,
                'firstname' => $res[0]->firstname,
                'lastname' => $res[0]->lastname,
                'logged_in' => TRUE,
            );
            
            $this->session->set_userdata($newdata);
        }

        echo json_encode(array('res' => $res));
    }
}

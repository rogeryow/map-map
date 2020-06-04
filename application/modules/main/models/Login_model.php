<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{

    public function __construct()
    {
      parent::__construct();
      $this->load->database();
    }
    
    public function loginDeveloper($email, $password)
    {
        $this->db->where('email',$email);
        $query = $this->db->get('admin_devs');
        $res = $query->result();

        if($res)
        {
            if(password_verify($password, $res[0]->password)): return $res; else: return false; endif;
        }
        else
        {
            return false;
        }
    }
    public function loginAdmin($email, $password)
    {
        $this->db->where('email',$email);
        $query = $this->db->get('administrator');
        $res = $query->result();

        if($res)
        {
            $this->db->where('administrator_id',$res[0]->administrator_id);
            $query = $this->db->get('vw_administrator_login');
            $res2 = $query->result();
            
            if($res2)
            {
                if(password_verify($password, $res2[0]->password)): return $res2; else: return false; endif;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }
    public function loginTeacher($email, $password)
    {
        $this->db->where('email',$email);
        $query = $this->db->get('vw_teacher_reg');
        $res = $query->result();

        if($res)
        {
            if(password_verify($password, $res[0]->password)): return $res; else: return false; endif;
        }
        else
        {
            return false;
        }
    }
    public function loginGuidance($email, $password)
    {
        $this->db->where('email',$email);
        $query = $this->db->get('vw_guidance_reg');
        $res = $query->result();

        if($res)
        {
            if(password_verify($password, $res[0]->password)): return $res; else: return false; endif;
        }
        else
        {
            return false;
        }
    }
}
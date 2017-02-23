<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index()
    {
            $this->load->view('index');
    }
    
    function signin()
    {   
        if(isset($_POST))
        {
            $username = trim($_POST["userName"]);
            $password = trim($_POST["userPassword"]);
            
            if($username == "admin" && $password == "123")
            {
                $sessiondata = array(
                        'username'  =>  $username,
                        'is_logged_in' => TRUE
                );

                $this->session->set_userdata($sessiondata);
                redirect(SITE_PATH.'adminpanel');
                
            }else{
                redirect(SITE_PATH);
            }
        }else{
            redirect(SITE_PATH);
        }
    }
        
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(SITE_PATH);
    }
}

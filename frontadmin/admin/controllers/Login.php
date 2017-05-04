<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        
        $newdata = array(
                'username'  => 'johndoe',
                'email'     => 'johndoe@some-site.com',
                'is_logged_in' => TRUE
        );

        $this->session->set_userdata($newdata);
        $this->load->view('login');
    }
    
    public function logout()
    {
//        session_destroy();
//
//// or

        $this->session->sess_destroy();
        redirect(base_url());
    }
}

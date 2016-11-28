<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() 
	{
            parent::__construct();   
            $this->load->model("recharge", '', true);
            $this->load->model("Data", '', true);
//            test_login();  // check user loggin or not
		
	}
	function index()
	{
            $this->load->view('login');
	}
        
        function signin()
        {
			if(isset($_POST))
            {
                $arrayCheckData = array(
                    "username" => $_POST["userName"],
                    "password" => $_POST["userPassword"],
                );
                
                    $existUser = $this->Data->checkUserExists("userlogin",$arrayCheckData);
//                    print_r($existUser);
                    if($existUser)
                    {
                        $sessiondata = array(
                                'username'  =>  $_POST["userName"],
                                'companyname'  =>  $_POST["usertype"],
                                'is_logged_in' => TRUE
                        );

                        $this->session->set_userdata($sessiondata);
                    
                    if($_POST["usertype"] == "Cellbiz")
                    {
                        redirect(SITE_PATH.'cellbiz');
                    }else if ($_POST["usertype"] == "Cellmoney") {
                        redirect(SITE_PATH.'cellmoney');
                    }else if ($_POST["usertype"] == "Cellmoneynet") {
                        redirect(SITE_PATH.'cellmoneynet');
                    }else if ($_POST["usertype"] == "cellmoneynetin") {
                        redirect(SITE_PATH.'cellmoneynetin');
                    }
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

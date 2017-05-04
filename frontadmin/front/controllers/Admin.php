<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        test_login();
        userDetails();
        $this->user->userDetailss();
    }


    public function index()
    {
        $data = array(
                'title'     => 'My Title',
                'heading'   => 'My Heading',
                'message'   => 'My Message'
        );
        $data['userDetails']=userDetails();
        $data['libarayDetails'] = $this->user->userDetailss();
        $this->load->view('admin/index', $data, FALSE);
    }
        
        
}

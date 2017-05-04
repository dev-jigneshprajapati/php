<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//change the table name

if (!defined('BASEPATH')) exit('No direct script access allowed');

class getSystem
{
    function __construct()
    {
       $this->CI = & get_instance();  //get instance, access the CI superobject
    }
    function check()
    {
        $isLoggedIn = $this->CI->session->userdata('is_logged_in');
//        echo base_url().'login';
//        echo site_url();
//        var_dump($isLoggedIn);
//        echo "----$isLoggedIn--- sadsadfads";
//        die();
        if(!$isLoggedIn) {
//            redirect(site_url().'welcome','refresh');
        }
        
    }

}


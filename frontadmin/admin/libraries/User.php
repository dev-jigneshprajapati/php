<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class User
{
    function userDetailss()
    {
        $CI =& get_instance();
        $CI->load->model('welcome_model');
        $userData = $CI->welcome_model->view_data();
//        print_r($userData);
//        die();
        return $userData;
    }
}
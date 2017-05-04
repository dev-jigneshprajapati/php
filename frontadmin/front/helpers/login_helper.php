<?php

function test_login(){
    
    $CI = & get_instance();  //get instance, access the CI superobject
    $isLoggedIn = $CI->session->userdata('is_logged_in');
    if(!$isLoggedIn) {
           redirect('login');
    }
    return FALSE;  
}

function userDetails()
{
    $CI =& get_instance();
    $CI->load->model('welcome_model');
    $userData = $CI->welcome_model->view_data();
//    print_r($userData);
    return $userData;
}
?>


<?php

function test_login(){
    
    $CI = & get_instance();  //get instance, access the CI superobject
    $isLoggedIn = $CI->session->userdata('is_logged_in');
    if(!$isLoggedIn) {
           redirect('login');
    }
    return FALSE;  
}

?>


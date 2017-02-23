<?php

function session_check(){
    
    $CI = & get_instance();  //get instance, access the CI superobject
    $isLoggedIn = $CI->session->userdata('is_logged_in');
    if(!$isLoggedIn) {
           redirect(SITE_PATH);
    }
    return FALSE;  
}

?>


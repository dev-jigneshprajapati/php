<?php

// Include confi.php
include_once('config.php');

if($_SERVER['REQUEST_METHOD'] == "PUT"){
        
    $uid = isset($_SERVER['HTTP_UID']) ? mysql_real_escape_string($_SERVER['HTTP_UID']) : "";
    $name = isset($_SERVER['HTTP_NAME']) ? mysql_real_escape_string($_SERVER['HTTP_NAME']) : "";
    $email = isset($_SERVER['HTTP_EMAIL']) ? mysql_real_escape_string($_SERVER['HTTP_EMAIL']) : "";
    $status = isset($_SERVER['HTTP_STATUS']) ? mysql_real_escape_string($_SERVER['HTTP_STATUS']) : "";


    // Add your validations
    if(!empty($uid)){
        $str = "UPDATE  `test1`.`users` SET  `name` =  '$name' , `email` =  '$email' , `status` =  '$status' WHERE  `users`.`ID` ='$uid';" ;
        $qur = mysql_query($str);
        if($qur)
        {
                $json = array("status" => 1, "msg" => "Status updated!!.");
        }else{
                $json = array("status" => 0, "msg" => "Error updating status");
        }
    }else{
            $json = array("status" => 0, "msg" => "User ID not define");
    }
}else{
        $json = array("status" => 0, "msg" => "User ID not define");
}
@mysql_close($conn);

/* Output header */
header('Content-type: application/json');
echo json_encode($json);

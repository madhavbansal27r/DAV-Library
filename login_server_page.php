<?php

include("data_class.php");

$login_email=$_POST['email'];
$login_pasword=$_POST['pass'];

if($login_email==null||$login_pasword==null){
    $emailmsg="";
    $pasdmsg="";
    
    if($login_email==null){
        $emailmsg="Email is Empty";
    }
    if($login_pasword==null){
        $pasdmsg="Password is Empty";
    }

    header("Location: index.php?emailmsg=$emailmsg&pasdmsg=$pasdmsg");
}

elseif($login_email!=null&&$login_pasword!=null){
    $obj=new data();
    $obj->setconnection();
    $obj->userLogin($login_email,$login_pasword);

}





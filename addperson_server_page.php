<?php

include("data_class.php");

$addname = $_POST['name'];
$addpassword = $_POST['pass'];
$addemail = $_POST['email'];
$type = $_POST['type'];

$obj = new data();
$obj->setconnection();
$obj->addnewuser($addname,$addpassword,$addemail,$type);

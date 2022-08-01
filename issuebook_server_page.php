<?php

include("data_class.php");

$book=$_POST['selectbook'];
$selectuser= $_POST['selectuser'];
$getdate= date("d/m/Y");
$days= $_POST['selectdays'];

$returnDate=Date('d/m/Y', strtotime('+'.$days.'days'));

$obj=new data();
$obj->setconnection();
$obj->issuebook($book,$selectuser,$days,$getdate,$returnDate);

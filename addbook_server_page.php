<?php

include("data_class.php");

$bookname = $_POST['name'];
$bookdetail = $_POST['detail'];
$bookauthor = $_POST['author'];
$bookpublication = $_POST['publication'];
$bookprice = $_POST['price'];
$bookquantity = $_POST['quantity'];
$bookbranch = $_POST['branch'];
// $bookphoto = $_POST['bookphoto'];


if (move_uploaded_file($_FILES["bookphoto"]["tmp_name"],"uploads/" . $_FILES["bookphoto"]["name"])) {

  $bookpic=$_FILES["bookphoto"]["name"];

$obj=new data();
$obj->setconnection();
$obj->addbook($bookpic,$bookname,$bookdetail,$bookauthor,$bookpublication,$bookbranch,$bookprice,$bookquantity);
} 
else {
   echo "File not uploaded";
}
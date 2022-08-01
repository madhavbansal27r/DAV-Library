<?php

    include("data_class");
    session_start();
    unset($_SESSION["adminid"]);
    header("location:index.php");


    // if (empty($_SESSION["adminid"])) {
    //     header("location:index.php?msg=Login First");
    //     # code
    // }
?>
<?php
    $mysqli = new mysqli("localhost:3307","root","123","expressfood");

    if($mysqli -> connect_errno){
        header("location: db_error.php");
        exit(1);
    }

    define('SITE_ROOT',realpath(dirname(__FILE__)));
   
?>
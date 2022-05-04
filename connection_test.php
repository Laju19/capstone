<?php

    include 'credentials.php';

    $con = mysqli_connect($servername,$username,$password,$dbname) or die ("could not connect database");


if($con) {
 }
 else{
    die('Connection failed: ' . mysql_error());
    

 }
 
 
 ?>
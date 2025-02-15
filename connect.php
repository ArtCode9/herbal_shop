<?php


 // Database connection
 $servername = "localhost";
 $username = "artcode";
 $password = "1";
 $dbname = "herbalshop";

 $conn = new mysqli($servername, $username, $password, $dbname);

 // check connection
 if($conn->connect_error){
    die("Connection failed : " . $conn->connect_error);
 }else{
    echo"connection success";
 }
   


 ?>
<?php 

 
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "lab_5";

    $conn=mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn){
    	die("Server not connected".mysql_error());
    }




?>
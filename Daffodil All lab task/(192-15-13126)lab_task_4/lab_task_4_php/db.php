<!------------- this is written to connect to the database----->
<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "php_test";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>
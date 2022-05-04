<?php 

require_once "config.php";

   $conn=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
     if(!$conn){
         die('Could not Connect MySql Server:' .mysql_error());
       }
?>
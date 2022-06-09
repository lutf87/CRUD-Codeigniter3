<?php
$host="127.0.0.1";
$user="root";
$password="";
$db = "data_siswa";
 
$con = mysqli_connect($host,$user,$password,$db);
 
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{  //echo "Connect"; 
  
   
   }
 
?>

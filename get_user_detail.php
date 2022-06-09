<?php
 
$response = array();
include_once("config.php");
 
if (isset($_GET["id"])) {
    $id = $_GET['id'];
    $query= "SELECT * FROM tabel_login WHERE id='$id'";
 
 $result= mysqli_query($con, $query);
 $emparray = array();
 if(mysqli_num_rows($result) > 0){  
  while ($row = mysqli_fetch_assoc($result)) {
   $emparray[] = $row;
         echo json_encode(array( "status" => "true", "data" => $emparray) );
  }
 }
 else{ 
  echo json_encode(array( "status" => "false","message" => "No User Found!") );
 }
  
}else {
 echo json_encode(array( "status" => "false","message" => "Required field(s) is missing!") );
}
?>
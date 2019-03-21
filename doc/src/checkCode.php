<?php
include '../config/connection.php';
$response = [];
session_start();

$admin_id = $_SESSION['admin_id'];
$RecieverId = $_REQUEST['SenderId'];
$sql = "SELECT * FROM `DepartmentTrack` WHERE Id='$RecieverId'";

if($result = mysqli_query($con,$sql))
{
  if(mysqli_num_rows($result)==1){
    $response['true'] = true;
  }
  else {
      $response['false'] = false;
  }
}
$con->close();
exit(json_encode($response));
 ?>

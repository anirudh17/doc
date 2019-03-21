<?php
 include '../config/connection.php';
$response = [];
$id  = $_REQUEST['wid'];
$sql = "DELETE FROM salesManAssign WHERE AssignId='$id'";

if(mysqli_query($con,$sql))
  $response['success'] = 'true';
else
  $response['errors'] = 'false';

$con->close();
exit(json_encode($response));
 ?>

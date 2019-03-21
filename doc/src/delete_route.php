<?php
 include '../config/connection.php';
$response = [];
$id  = $_REQUEST['id'];
$sql = "DELETE FROM RouteMaster WHERE RouteId='$id'";

if(mysqli_query($con,$sql))
  $response['success'] = 'true';
else
  $response['errors'] = 'false';

$con->close();
exit(json_encode($response));
 ?>

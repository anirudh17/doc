<?php
 include '../config/connection.php';
$response    = [];
$salesmanid  = $_REQUEST['removesalesman'];
$sql = "DELETE FROM SalesManMaster WHERE salesManId ='$salesmanid'";

if(mysqli_query($con,$sql))
  $response['success'] = 'true';
else
  $response['errors'] = 'false';

$con->close();
exit(json_encode($response));
 ?>

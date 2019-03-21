<?php
include 'connection.php';
$id       = 1;//$_REQUEST['id'];
$tblName  = 'salesPerson';//$_REQUEST['tblName'];
$colName  = 'Emp_id';//$_REQUEST['colName'];
$response = [];

$sql = "DELETE FROM '$tblName' WHERE '$colName' = '$id'";
if(mysqli_query($con,$sql)){
    $response['true'] = 'true';
}else{
    $response['false'] = 'false';
}
mysqli_close($con);
exit(json_encode($response));
?>
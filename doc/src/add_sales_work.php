<?php
include '../config/connection.php';
$response   = [];
$admin_id   = 1;//$_SESSION['admin_id'];
$RouteId          = $_REQUEST['source'];
$Sid      = $_REQUEST['salesmansid'];
$status=$_REQUEST['status'];
$date     = $_REQUEST['assigndate'];
$wtime     = $_REQUEST['wtime'];


if(!empty($_REQUEST['w_id'])){
$w_id   =   $_REQUEST['w_id'];
$sql = "UPDATE salesManAssign SET RouteId = '$RouteId',salesManId = '$Sid',status = '$status',assignDate = '$date' waiting_time = '$wtime' WHERE AssignId = $w_id ";
$response['val1'] = 'update';
}else{
    $sql = "INSERT INTO salesManAssign(RouteId,salesManId,status,assignDate,waiting_time) VALUES('$RouteId','$Sid','$status','$date','$wtime')";
$response['val1'] = 'insert';
}
if(mysqli_query($con,$sql)){
    $response['true'] = 'true';
}
else{
    $response['false'] = 'false';
}
$response['sql'] = $sql;
mysqli_close($con);
exit(json_encode($response));
?>

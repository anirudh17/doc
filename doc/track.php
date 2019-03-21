<?php
include '../config/connection.php';
session_start();
$response = [];
$admin_id = $_SESSION['admin_id'];
$sender = $_POST['senderName'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];
$var = implode(',',$sender);
$sql = "INSERT INTO DepartmentTrack(DeptId,subject,senders,message) VALUES('$admin_id','$subject','$var','$message')";
echo $sql;
if(mysqli_query($con,$sql) or die(mysqli_error($con))){
  $response['true'] = true;
}else {
  $response['false'] = false;
}
mysqli_close($con);
exit(json_encode($response));
?>

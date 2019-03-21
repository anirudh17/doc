<?php
include '../config/connection.php';
session_start();
$admin_id   = $_SESSION['admin_id'];
$sender     = $_REQUEST['senderName'];
$subject    = $_REQUEST['subject'];
$SenderName = implode(',',$sender);
$message    = mysqli_real_escape_string($con,$_REQUEST['message']);
$note       = mysqli_real_escape_string($con,$_REQUEST['note']);
$sql = "INSERT INTO DepartmentTrack(DeptId,subject,senders,message,note) VALUES('$admin_id','$subject','$SenderName','$message','$note')";

if(mysqli_query($con,$sql) or die(mysqli_error($con))){
  $response['true'] = true;
}else {
  $response['false'] = false;
}
mysqli_close($con);
exit(json_encode($response));
?>

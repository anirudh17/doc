<?php
include '../config/connection.php';
$response = [];
session_start();

$admin_id = $_SESSION['admin_id'];
$sql = "SELECT subject,DeptId,senders,Id FROM `DepartmentTrack` WHERE DeptId='$admin_id' ORDER BY Id DESC";

if($result = mysqli_query($con,$sql))
{
  while($row=mysqli_fetch_array($result))
  {
    array_push($response,[
      'Id' => $row['Id'],
      'DeptId'   => $row['DeptId'],
      'subject'   => $row['subject'],
      'senders'=> $row['senders']
      ]);
  }
}
$con->close();
exit(json_encode($response));
 ?>

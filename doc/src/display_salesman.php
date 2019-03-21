<?php
include '../config/connection.php';
$response = [];
session_start();

$admin_id = $_SESSION['admin_id'];
$sql = "SELECT * FROM SalesManMaster where userId = '$admin_id'";
if($result = mysqli_query($con,$sql))
{
  while($row=mysqli_fetch_array($result))
  {
    array_push($response,[
      'Emp_id'   => $row['salesManId'],
      'fullname'   => $row['fname'].' '. $row['lname'],
      'email'=> $row['email'],
      'mobile'  => $row['contactNumber'],
      'address' => $row['address'],
      'status'  => $row['status'],
      'profilePic'  => $row['profilePic']
      ]);
  }
}
$con->close();
exit(json_encode($response));
 ?>

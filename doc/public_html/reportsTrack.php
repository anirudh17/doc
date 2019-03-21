<?php
include '../config/connection.php';
$response = [];
session_start();

$admin_id = $_SESSION['admin_id'];
$docId = $_REQUEST['id'];
$sql = "SELECT concat(fname,' ',lname) DeptName,scanAt,docId,userId FROM users U INNER JOIN TrackDocument T ON T.recieverId = U.userId  WHERE T.docId = '$docId'";

if($result = mysqli_query($con,$sql))
{
  while($row=mysqli_fetch_array($result))
  {
    array_push($response,[
      'DeptName' => $row['DeptName'],
      'docId'   => $row['docId'],
      'scanAt'   => $row['scanAt'],
      'userId' =>$row['userId']
      ]);
  }
}
$con->close();
exit(json_encode($response));
 ?>

<?php
include '../config/connection.php';
$response = [];
$docId = $_REQUEST['qrId'];
$sql = "SELECT DT.DeptId,DT.subject,DT.message,U.email,U.fname,U.lname,DT.note FROM DepartmentTrack DT LEFT JOIN users U ON U.userId = DT.DeptId
WHERE DT.Id = $docId";
// echo $sql;
if($result = mysqli_query($con,$sql))
{
      $row=mysqli_fetch_array($result);
      $response['DeptName'] = ucwords($row['fname'].' '.$row['lname']);
      $response['DeptEmail']   = $row['email'];
      $response['message']   = ucwords($row['message']);
      $response['subject'] = ucwords($row['subject']);
      $response['DeptId'] = $row['DeptId'];
      $response['note'] = $row['note'];
}
$con->close();
exit(json_encode($response));
 ?>

<?php
include '../config/connection.php';
$response = [];
session_start();
$admin_id = $_SESSION['admin_id'];
$sql = "SELECT DT.subject,DT.DeptId,DT.senders,DT.Id,U.fname,U.lname FROM TrackDocument TD INNER JOIN
DepartmentTrack DT ON DT.Id = TD.docId LEFT JOIN users U ON U.userId = DT.DeptId WHERE TD.recieverId = $admin_id";
if($result = mysqli_query($con,$sql))
{
  while($row=mysqli_fetch_array($result))
  {
    $senders = explode(',',$row['senders']);
    $count = count($senders);
    for($i=0;$i<$count;$i++){
      if($senders[$i] == $admin_id){
        array_push($response,[
          'Id' => $row['Id'],
          'DeptId'   => $row['DeptId'],
          'subject'   => $row['subject'],
          'DeptName' => ucwords($row['fname'].' '.$row['lname'])
          ]);
      }
    }

  }
}
$con->close();
exit(json_encode($response));
 ?>

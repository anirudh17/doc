<?php
include '../config/connection.php';
$response = [];
session_start();

$admin_id = $_SESSION['admin_id'];
$docId = $_REQUEST['id'];
$sql = "SELECT concat(fname,' ',lname) DeptName,scanAt,docId,userId,COALESCE(feedback,0) AS feedback FROM users U INNER JOIN TrackDocument T ON T.recieverId = U.userId  WHERE T.docId = $docId";
if($result = mysqli_query($con,$sql))
{
  if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_array($result))
    {
      if(!$row['feedback']==0){
        array_push($response,[
          'DeptName' => $row['DeptName'],
          'docId'   => $row['docId'],
          'scanAt'   => $row['scanAt'],
          'userId' =>$row['userId'],
          'feedback' => $row['feedback']
          ]);
      }

    }
  }

}
$con->close();
exit(json_encode($response));
 ?>

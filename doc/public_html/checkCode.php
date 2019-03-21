<?php
include '../config/connection.php';
$response = [];
session_start();

$admin_id = $_SESSION['admin_id'];
$RecieverId = $_REQUEST['SenderId'];

$sql = "SELECT * FROM `DepartmentTrack` WHERE Id='$RecieverId'";
  $flag = 0;
if($result = mysqli_query($con,$sql))
{

  if(mysqli_num_rows($result)==1){
    $row = mysqli_fetch_array($result);
    $response['true'] = true;
    if($row['DeptId'] == $admin_id){
      $response['msg'] = 'Dont Scan the code';
    }else {
      $str_arr = explode (",",$row['senders']);
      $count = count($str_arr);
      for($i=0;$i<$count;$i++){
        if($str_arr[$i]==$admin_id){
          $response['msg'] = 'Scan code successFully';
          $sql_check = "SELECT * FROM TrackDocument where docId ='$RecieverId' AND recieverId = '$admin_id'";
          if($re = mysqli_query($con,$sql_check)){
            if(mysqli_num_rows($re)==1){
              $response['msg'] = 'Document Already Scanned';
              $flag = 1;
            }
          }
          if($flag == 0){
            $sql = "INSERT INTO TrackDocument(docId,recieverId) VALUES('$RecieverId','$admin_id')";
            mysqli_query($con,$sql) or die(mysqli_error($con));
          }

        }
      }
    }
  }
  else {
      $response['false'] = false;
  }
}
$con->close();
exit(json_encode($response));
 ?>

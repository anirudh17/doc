<?php
include '../config/connection.php';
$response = [];
$email     = $_REQUEST['username'];
$upassword = $_REQUEST['pwd'];


$sql = "SELECT userId,fname,lname,email FROM users WHERE email='$email' AND upassword='$upassword'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)==1){
    session_start();
    $response['true'] = 'true';
    $row = mysqli_fetch_array($result);
    $user_id = $row['userId'];
    $_SESSION['admin_id'] = $user_id;
    $_SESSION['admin_name'] = $row['fname'].' '.$row['lname'];
}else{
    $response['false'] = 'false';
}
mysqli_close($con);
exit(json_encode($response));
?>

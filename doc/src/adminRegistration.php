<?php
include '../config/connection.php';
$response   = [];

$lname      = trim($_POST['name']);
$email      = trim($_POST['email']);
$password   = trim($_POST['pwd']);


    $sql = "INSERT INTO users(lname,email,upassword) VALUES('$lname','$email','$password')";

    if(mysqli_query($con,$sql) or die(mysqli_error($con))){
    $response['msg'] = 'New User Created SuccessFully';
}else{
      $response['msg'] = 'Problem With Server Try again...';

}
mysqli_close($con);
exit(json_encode($response));
?>

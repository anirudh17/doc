<?php
include '../config/connection.php';
$response   = [];
$admin_id      = 1;//$_REQUEST['admin_id'];

$sql = "SELECT Emp_id,fname,lname from salesPerson where admin_id = $admin_id";
$result = mysqli_query($con,$sql) or die(mysqli_error($con));
while($row = mysqli_fetch_array($result)){
    echo '<option value="'.$row['Emp_id'].'">'.$row['fname'].' '.$row['lname'].'</option>';
}
mysqli_close($con);
?>

<?php
include '../config/connection.php';
$response   = [];
$admin_id      = 1;//$_REQUEST['admin_id'];

$sql = "SELECT routeId,source,destination from Routes";
$result = mysqli_query($con,$sql) or die(mysqli_error($con));
while($row = mysqli_fetch_array($result)){
    echo '<option value="'.$row['routeId'].'">'.$row['source'].'-'.$row['destination'].'</option>';
}
mysqli_close($con);
?>

<?php
include '../config/connection.php';
//session_start();
$response   = [];
$Emp_id     = $_REQUEST['Emp_id'];//$_SESSION['Emp_id'];
$admin_id   = 1;//$_SESSION['admin_id'];
$route      = $_REQUEST['route'];
$area       = $_REQUEST['area'];
$city       = $_REQUEST['city'];
$address    = $_REQUEST['address'];
$pincode    = $_REQUEST['pincode'];
$contact_person= $_REQUEST['contact_person'];
$contact_no = $_REQUEST['contact_number'];
$waitingTime= $_REQUEST['waitingTime'];
$visit_date = $_REQUEST['visitDate'];
$lat        = $_REQUEST['Latitude'];
$long       = $_REQUEST['Longitude'];


if(isset($_REQUEST['id'])){
$work_id = $_REQUEST['id'];
$sql = "UPDATE salesFieldWork SET area = '$area',address = '$address',city = '$city',pincode ='$pincode',contact_number = '$contact_no',
waiting_time = '$waitingTime',Latitude = '$lat',Longitude ='$long' WHERE work_id = $work_id";
}else{
    $sql = "INSERT INTO salesFieldWork(Emp_id,routeNumber,area,address,city,pincode,contact_person,contact_number,waiting_time,visitDate,Latitude,Longitude) VALUES(
        '$Emp_id','$route','$area','$city','$address','$pincode','$contact_person','$contact_no','$waitingTime','$visit_date','$lat','$long')";
}
if(mysqli_query($con,$sql) or die(mysqli_error($con))){
    $sql2 = "SELECT contact_person,contact_number,work_id ,area,city,pincode,address FROM salesFieldWork where Emp_id = '$Emp_id' AND DATE(created_at) = CURRENT_DATE";
    $result = mysqli_query($con,$sql2) or die(mysqli_error($con));
    while($row = mysqli_fetch_array($result)){
      array_push($response,[
        'area' => $row['area'],
        'city' => $row['city'],
        'pincode' => $row['pincode'],
        'address' => $row['address'],
        'contact_number'=>$row['contact_number'],
        'contact_person'=>$row['contact_person']
      ]);
    }
}
else{
    $response['false'] = 'false';
}
mysqli_close($con);
exit(json_encode($response));
?>

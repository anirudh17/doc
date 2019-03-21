<?php
include '../config/connection.php';
session_start();
$salesManId= $_SESSION['Emp_id'];
$response = [];

$sql = "SELECT salesManAssign.AssignId,salesManAssign.RouteId,salesManAssign.salesManId,
salesManAssign.status,salesManAssign.assignDate,RouteMaster.source,RouteMaster.destination
FROM salesManAssign,RouteMaster
WHERE salesManAssign.RouteId = RouteMaster.RouteId
AND salesManAssign.assignDate = CURRENT_DATE()
AND salesManAssign.salesManId = '$salesManId'";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){
$RID = $row['RouteId'];
  $sqlCountRoute = "SELECT COUNT(DISTINCT shopKeeperMaster.shopKeeperId) as SKCount
  FROM RouteDetails,shopKeeperMaster
  WHERE shopKeeperMaster.shopKeeperId = RouteDetails.shopKeeperId
   and RouteDetails.RouteId = '$RID'";
  $result1 = mysqli_query($con,$sqlCountRoute);
  $row1 = mysqli_fetch_array($result1);
  $Rcnt = $row1['SKCount'];

array_push($response,[
    'AssignId' => $row['AssignId'],
    'RouteId'  => $row['RouteId'],
    'assignDate' => $row['assignDate'],
    'status' => $row['status'],
    'source' => $row['source'],
    'destination' => $row['destination'],
    'TotalRouteCnt' => $Rcnt
]);
}

mysqli_close($con);
exit(json_encode($response));
?>

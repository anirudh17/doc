<?php
include '../config/connection.php';
session_start();
$admin_id = $_SESSION['admin_id'];
?>
 <option values=""></option>

 <?php
if($result = mysqli_query($con,"SELECT userId,upper(CONCAT(fname,' ',lname)) deptName From users WHERE users.userId <> $admin_id"))
{
  if(mysqli_num_rows($result)>0)
  {
    while($row=mysqli_fetch_array($result))
    {?>
    <option value='<?php echo $row['userId'];?>'><?php echo $row['deptName'];?></option>
    <?php
    }
  }
}
 ?>

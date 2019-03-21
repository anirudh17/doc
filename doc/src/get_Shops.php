<?php
include '../config/connection.php';

?>
 <option values=""></option>

 <?php
if($result = mysqli_query($con,"SELECT shopKeeperId,contactPerson From shopKeeperMaster"))
{
  if(mysqli_num_rows($result)>0)
  {
    while($row=mysqli_fetch_array($result))
    {?>
    <option value='<?php echo $row['shopKeeperId'];?>'><?php echo $row['contactPerson'];?></option>
    <?php
    }
  }
}
 ?>

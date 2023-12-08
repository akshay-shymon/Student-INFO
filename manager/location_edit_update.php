<?php

include("config.php");
if(isset($_GET["btnSave"]))
{
	$location=$_GET['location'];
	$id=$_GET['location_id'];
}
$save=mysqli_query($con,"update tbl_location set location='$location' where location_id='$id'");
echo "<script>alert('Course Update Successfully');window.location='location.php'</script>";
?>
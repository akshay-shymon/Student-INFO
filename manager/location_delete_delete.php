<?php
include("config.php");
if(isset($_GET["btnSave"]))
{
	$location_id=$_GET["txtlocation_id"];

mysqli_query($con,"delete from tbl_location where location_id=$location_id");
echo "<script>alert('Deleted Successfully');window.location='location.php'</script>";
}else
echo "<script>alert('Not Deleted Successfully');window.location='location.php'</script>";
?>
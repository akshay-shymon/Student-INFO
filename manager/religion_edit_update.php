<?php

include("config.php");
if(isset($_GET["btnSave"]))
{
	$religion=$_GET['txtreligion'];
	$religion_id=$_GET['txtreligion_id'];
}
$save=mysqli_query($con,"update tbl_religion set religion='$religion' where religion_id='$religion_id'");
echo "<script>alert('Course Update Successfully');window.location='religion.php'</script>";
?>
<?php
include("config.php");
if(isset($_GET["btnSave"]))
{
	$religion_id=$_GET["txtreligion_id"];

mysqli_query($con,"delete from tbl_religion where religion_id=$religion_id");
echo "<script>alert('Deleted Successfully');window.location='religion.php'</script>";
}else
echo "<script>alert('Not Deleted Successfully');window.location='religion.php'</script>";
?>
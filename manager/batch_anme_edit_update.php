<?php

include("config.php");
if(isset($_GET["btnSave"]))
{
	$batch=$_GET['batch'];
	$id=$_GET['batch_id'];
}
$save=mysqli_query($con,"update tbl_batch1 set batch='$batch' where location_id='$id'");
echo "<script>alert('Course Update Successfully');window.location='batch_name.php'</script>";
?>
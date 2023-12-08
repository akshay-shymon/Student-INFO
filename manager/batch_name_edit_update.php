<?php

include("config.php");
if(isset($_GET["btnSave"]))
{
	$batch_id=$_GET['txtbatch_id'];
	$batch=$_GET['txtbatch'];
	
}
$save=mysqli_query($con,"update tbl_batch1 set batch='$batch' where batch_id='$batch_id'");
echo "<script>alert('Batch Update Successfully');window.location='batch.php'</script>";
?>
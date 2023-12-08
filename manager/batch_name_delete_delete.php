<?php
include("config.php");
if(isset($_GET["btnSave"]))
{
	$batch_id=$_GET["txtbatch_id"];

mysqli_query($con,"delete from tbl_batch1 where batch_id=$batch_id");
echo "<script>alert('Deleted Successfully');window.location='batch_name.php'</script>";
}else
echo "<script>alert('Not Deleted Successfully');window.location='batch_name.php'</script>";
?>
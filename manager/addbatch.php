<?php
include('config.php');
if(isset($_POST["Save"]))
	{
		$course=$_POST["course_id"];
		$batch=$_POST["txtbatch"];
		$res=mysqli_query($con,"INSERT INTO tbl_batch(course_id, batch)VALUES('$course','$batch')");
		
		
		if($res)
		{
			echo "<script>alert('inserted');window.location='batch.php';</script>";
		}
	}
?>
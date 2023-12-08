<?php
include("config.php");
if(isset($_POST["btnSave"]))
	{
		$name=$_POST["txtstuname"];
		$batch_id=$_POST["txtbatch"];
		$course_id=$_POST["courseselect"];
		$email=$_POST["txtemail"];
		$user_name=$_POST["txtusername"];
		$password=$_POST["txtpassword"];
		if($batch_id==0 || $course_id==0)
		{
			echo "<script>alert('Enter course and batch');window.location='student_registration.php';</script>";
		}
		else
		{
		$res=mysqli_query($con,"INSERT INTO tbl_basicinfo(name,email,user_name,password,batch_id,course_id)VALUES('$name','$email','$user_name','$password', '$batch_id','$course_id')");
		if($res)
		{
			echo "<script>alert('inserted');window.location='index.html';</script>";
		}
		}
	}
?>
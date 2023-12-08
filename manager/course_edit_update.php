<?php

include("config.php");
if(isset($_GET["btnSave"]))
{
	$course_name=$_GET['txtcoursename'];
	$short_name=$_GET['txtshortname'];
	$course_id=$_GET['txtcourse_id'];
}
$save=mysqli_query($con,"update tbl_course set course_name='$course_name',short_name='$short_name' where course_id='$course_id'");
echo "<script>alert('Course Update Successfully');window.location='course.php'</script>";
?>
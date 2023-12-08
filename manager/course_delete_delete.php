<?php
include("config.php");
if(isset($_GET["btnSave"]))
{
	$course_id=$_GET["txtcourse_id"];

mysqli_query($con,"delete from tbl_course where course_id=$course_id");
echo "<script>alert('Deleted Successfully');window.location='course.php'</script>";
}else
echo "<script>alert('Not Deleted Successfully');window.location='course.php'</script>";
?>
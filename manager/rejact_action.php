
<?php
include("config.php");
if(isset($_POST["btnSave"]))
{
	 $student=$_POST["txtstudent"];

mysqli_query($con,"update tbl_stu_all_details set approve='2' where student_id='$student'");
echo "<script>alert('Student Rjacted');window.location='approve.php'</script>";
}else
echo "<script>alert('Student Not Rejacted');window.location='approve.php'</script>";
?>
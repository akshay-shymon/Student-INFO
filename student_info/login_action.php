
<?php
session_start();
include("config.php");
if(isset($_POST['submit']))
{
	$username=$_POST["txt_username"];
	$password=$_POST["txt_password"];

     $check=mysqli_query($con,"select count(*) from tbl_basicinfo where user_name='$username' && password='$password'");
	 $row=mysqli_fetch_array($check);
	 
	 
	 $check1=mysqli_query($con,"select count(*) from tbl_manager_login where username='$username' && password='$password'");
	 $row1=mysqli_fetch_array($check1);
	 

	 
if($row[0]==1)
{ 

  $_SESSION["username"]=$username;
  echo "<script>alert('login sucessfully');window.location='../student/index.html';</script>";
  

}
elseif($row1[0]==1)
{ 
  echo "<script>alert('login sucessfully as manager');window.location='../manager/index.php';</script>";
 }
else
echo "<script>alert('Inavlid username/password');window.location='index.html';</script>";
}
?>

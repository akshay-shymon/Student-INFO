<?php
include("config.php");
?>
<?php
if(isset($_POST["btnsave"]))
	{
		$name=$_POST["txtname"];
		$pass=$_POST["txtpass"];
		
		$res=mysqli_query($con,"INSERT INTO  loginnewpage(Username,Password) VALUES('$name', '$pass')");
		if($res)
		{
			echo "<script>alert('Login ');window.location='';</script>";
		}
	}else
	echo "Failed";
?>
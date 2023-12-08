<?php
include("header.php");
?>
<?php
include("config.php");
?>

<form action="SST_EmployeeDetails.php" method="post">

<div class="container" style="margin-left:250px;">
   	<div class="row">
            <div class="col-md-11" style="box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px;">
                <h3 style="text-align: center">EMPLOYEE REGISTRATION</h3>
                	<div class="form-horizontal">
						<div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="empname">Name</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtempname" style="width:500px;">
                        			</div>
                    	</div>
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="empname">House Name</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txthousename" style="width:500px;">
                        			</div>
                    	</div>
                         <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="empname">Gender</label>
                        			<div class="col-sm-10">
                           				<input type="radio" name="male" value="male" id="radio1" checked>Male
<input type="radio"  name="male" value="female" id="radio1" >Female
                        			</div>
                    	</div>
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="empname">Address</label>
                        			<div class="col-sm-10">
                           				<textarea name="txtaddress" style="width:500px;"></textarea>
                        			</div>
                    	</div>
                         <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="empname">Contact Number</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtcontact" style="width:500px;">
                        			</div>
                    	</div>
                         <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="empname">Personal Email</label>
                        			<div class="col-sm-10">
                           				<input type="email" name="txtemail" style="width:500px;">
                        			</div>
                    	</div>
                         <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="empname">Company Email</label>
                        			<div class="col-sm-10">
                           				<input type="email" name="txtcompanyemail" style="width:500px;">
                        			</div>
                    	</div>
                          <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="empname">Company Password</label>
                        			<div class="col-sm-10">
                           				<input type="email" name="txtpassword" style="width:500px;">
                        			</div>
                    	</div>
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="empname">Hourly Rate</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txthourlyrate" style="width:500px;">
                        			</div>
                    	</div>
                        
                          <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="empname">Date of Registration</label>
                        			<div class="col-sm-10">
                           				<input type="date" name="txtdoj" style="width:500px;">
                        			</div>
                    	</div>
                        
                         <div class="form-group" style="margin-top:10px;">
                        <div class="col-sm-6">
                         </div>
                         		<div class="col-sm-6">
                        				<input type="submit" name ="btnSave" value="Save" class="btn btn-danger" style="width:65px; height:35px;">
                    	</div>
                        		</div>
                        
					</div>
			</div>
		</div>
</div>
</form>
<?php
include("footer.php");
?>
<?php
if(isset($_POST["btnSave"]))
	{
		$employeename=$_POST["txtempname"];
		$employeehousename=$_POST["txthousename"];
		$emplyeeaddress=$_POST["txtaddress"];
		$employeeconatctnumber =$_POST["txtcontact"];
		$employeepersonalemail=$_POST["txtemail"];
		$employeecompanyemail=$_POST["txtcompanyemail"];
		$employeepassword=$_POST["txtpassword"];
		$employeehourlyrate =$_POST["txthourlyrate"];
		$employeedoj =$_POST["txtdoj"];
		
		$res=mysqli_query($con,"INSERT INTO tblemployee(employeename, employeehousename, emplyeeaddress, employeeconatctnumber, employeepersonalemail, employeecompanyemail, employeepassword, employeehourlyrate, employeestatus, employeedoj)VALUES('$employeename', '$employeehousename', '$emplyeeaddress', '$employeeconatctnumber', '$employeepersonalemail', '$employeecompanyemail','$employeepassword','$employeehourlyrate', '0','$employeedoj')");
		if($res)
		{
			echo "<script>alert('inserted');window.location='';</script>";
		}
	}
?>
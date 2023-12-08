<?php
session_start();
include("header.php");
include("config.php");

$username=$_SESSION["username"];
$result=mysqli_query($con,"select * from tbl_basicinfo where user_name='$username'");
$row=mysqli_fetch_array($result);

?>
<form action="stu_all_details_add.php" method="post">

<div class="container" style="margin-left:250px;">
   	<div class="row">
            <div class="col-md-11" style="box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px;"><br>
                <h3 style="text-align: center">STUDENT REGISTRATION</h3><br><br><br>
                	<div class="form-horizontal">
                    <div class="form-group" style="margin-top:10px;">
                        		 <h3 style="text-align: center">Parent</h3>
                      </div>
                        <input type="hidden" name="username" value="<?php echo $row[0] ?>" style="width:500px;">			
						<div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfathername">Father Name</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtfathername" style="width:500px;">
                        			</div>
                    	</div>
                         <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfatherjob">Father Job</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtfatherjob" style="width:500px;">
                        			</div>
                    	</div>
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtmothername">Mother Name</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtmothername" style="width:500px;">
                        			</div>
                                    </div>
                         <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtmotherjob">Mother Job</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtmotherjob" style="width:500px;">
                        			</div>
                    	</div>
                     
                       <div class="form-group" style="margin-top:10px;">
                        		 <h3 style="text-align: center">Guardian</h3>
                      </div>           
                      </div>
                        			
						<div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfathername">Guardian Name</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtguardian" style="width:500px;">
                        			</div>
                    	</div><br><br>
                         <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfatherjob">Qualification</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtqualification" style="width:500px;">
                        			</div>
                    	</div><br><br>
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtmothername">Jobe</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtguardianjobe" style="width:500px;">
                        			</div>
                                    </div><br><br>
                            
                         <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtmotherjob">Relation</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtrelation" style="width:500px;">
                        			</div>
                    	</div><br><br>
                        <div class="form-group" style="margin-top:10px;">
                      <h3 style="text-align: center">10th result and school</h3>
                      </div>
                                
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtmothername">school name</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtschoolname10" style="width:500px;">
                        			</div>
                                    </div>	<br><br>
						<div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfathername">result</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txt10result" style="width:500px;">
                        			</div>
                    	</div><br><br>
                         <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfatherjob">register number</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtregno10" style="width:500px;">
                        			</div>
                    	</div><br><br>
                        <div class="form-group" style="margin-top:10px;">
                        		 <h3 style="text-align: center">+2 result and school</h3>
                      </div>
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtmothername">school name</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtschoolname+2" style="width:500px;">
                        			</div>
                                    </div>	<br><br>		
						<div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfathername">result</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txt+2result" style="width:500px;">
                        			</div>
                    	</div><br><br>
                         <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfatherjob">register number</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtregno+2" style="width:500px;">
                        			</div>
                    	</div><br><br>
                         <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfatherjob">Locatiion</label>
                        			<div class="col-sm-10">
                        		<tr>
								
								<select name="txtlocation" style="width:500px;">
								<?php
								$result=mysqli_query($con,"select * from tbl_location	");
								echo "<option>..select..</option>";
								while($row=mysqli_fetch_array($result))
								{
								?>	
								<option value="<?php echo $row['location_id'];?>"><?php echo $row['location'];?></option>
								<?php
								}
								?>
								</select>
                                </td>
								</tr>
								</div>
                    	</div><br><br>
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfatherjob">Blood Group</label>
                        			<div class="col-sm-10">
                        		<tr>
								
								<select name="txtbgroup" style="width:500px;">
								<?php
								$result=mysqli_query($con,"select * from tbl_blood	");
								echo "<option>..select..</option>";
								while($row=mysqli_fetch_array($result))
								{
								?>	
								<option value="<?php echo $row['b_id'];?>"><?php echo $row['b_group'];?></option>
								<?php
								}
								?>
								</select>
                                </td>
								</tr>
								</div>
                    	</div><br><br>
                         <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfatherjob">Religion</label>
                        			<div class="col-sm-10">
                        		<tr>
								
								<select name="txtgenter" style="width:500px;">
								<?php
								$result=mysqli_query($con,"select * from tbl_genter	");
								echo "<option>..select..</option>";
								while($row=mysqli_fetch_array($result))
								{
								?>	
								<option value="<?php echo $row['genter_id'];?>"><?php echo $row['genter'];?></option>
								<?php
								}
								?>
								</select>
                                </td>
								</tr>
								</div>
                                
                    	</div><br><br>
                       <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfatherjob">Religion</label>
                        			<div class="col-sm-10">
                        		<tr>
								
								<select name="txtreligion" style="width:500px;">
								<?php
								$result=mysqli_query($con,"select * from tbl_religion	");
								echo "<option>..select..</option>";
								while($row=mysqli_fetch_array($result))
								{
								?>	
								<option value="<?php echo $row['religion_id'];?>"><?php echo $row['religion'];?></option>
								<?php
								}
								?>
								</select>
                                </td>
								</tr>
								</div>
                                
                    	</div><br><br>
                       <br><br>
                    	</div>
                       
                         <div class="form-group" style="margin-top:10px;">
                        <div class="col-sm-6">
                         </div><br><br>
                         		<div class="col-sm-6">
                        				<input type="submit" name ="btnSave" value="Save" class="btn btn-danger" style="width:65px; height:35px;">
                    	</div>
                        		</div>
                        
					</div>
			</div>
		
</form>
<?php
include("footer.php");
?>
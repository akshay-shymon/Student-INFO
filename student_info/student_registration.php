<?php
include("header.php");
include("config.php");
?>
<form action="student_registration_add.php" method="post">

<div class="container" style="margin-left:250px;">
   	<div class="row">
            <div class="col-md-11" style="box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px;">
                <h3 style="text-align: center">STUDENT REGISTRATION</h3>
                	<div class="form-horizontal">
                    
						<div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtstuname">Name</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtstuname" style="width:500px;" required>
                        			</div>
                    	</div>
                        <div class="form-group" style="margin-top:10px;">
                         <div class="col-sm-10">
                        		<tr>
								<td>Course</td><br>
								<select name="courseselect" required>
								<?php
								$result=mysqli_query($con,"select * from tbl_course");
								echo "<option>..select..</option>";
								while($row=mysqli_fetch_array($result))
								{
								?>	
								<option value="<?php echo $row['course_id'];?>"><?php echo $row['short_name'];?></                               option>
								<?php
								}
								?>
								</select>
                                </td>
								</tr>
                                </div>
								<!--
                                </div>-->
                              
                    	</div>
                          
                       <div class="form-group" style="margin-top:10px;">
                        			
                         <div class="col-sm-10">
                        		<tr>
								<td>Batch</td><br>
								<select name="txtbatch" required>
								<?php
								$result=mysqli_query($con,"select * from tbl_batch1	");
								echo "<option>..select..</option>";
								while($row=mysqli_fetch_array($result))
								{
								?>	
								<option value="<?php echo $row['batch_id'];?>"><?php echo $row['batch'];?></                               option>
								<?php
								}
								?>
								</select>
                                </td>
								</tr>
								</div>
                    	</div>
                    	</div>
                        
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtstuname">Email</label>
                        			<div class="col-sm-10">
                           				<input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="txtemail" style="width:500px;" required>
                        			</div>
                    	</div>
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtstuname">User name</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtusername" style="width:500px;" required>
                        			</div>
                    	</div>
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtstuname">Password</label>
                        			<div class="col-sm-10">
                           				<input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="txtpassword" style="width:500px;" required>
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
<?php
include("header.php");
include("config.php");
?>
<form action="10mark_piechart_class_action.php" method="post">

<div class="container" style="margin-left:250px;">
   	<div class="row">
            <div class="col-md-11" style="box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px;"><br><br>
                <h3 style="text-align: center"> PIECHART 10TH RESULT</h3>
                	<div class="form-horizontal">
                     <div class="form-group" style="margin-top:10px;">
                         <div class="col-sm-10">
                        		<tr>
								<br>
					
       
                        <div class="form-group" style="margin-top:10px;">
                         <div class="col-sm-10">
                        		<tr>
								<td>Course</td><br>
								<select name="courseselect">
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
								<select name="txtbatch">
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
                        <div class="col-sm-6">
                         </div>
                         		<div class="col-sm-6">
                        				<input type="submit" name ="btnSave" value="Filter" class="btn btn-danger" style="width:65px; height:35px;">
                    	</div>
                        		</div><br><br><br>
                        
					</div>
			</div>
		</div>
</div>

</form>
<?php
include("footer.php");
?>
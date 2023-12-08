<?php
include("header.php");
include("config.php");
?>

<form action="blood_filter_home.php" method="post">


<div class="container" style="width:100%">
        <div class="row">
            <div class="col-md-11" style="box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px;">
                <h3 style="text-align: center">BLOOD GROUP FILTER</h3>
                		<div class="form-horizontal" style="margin-left:250px;">
                        	
                            
                           
                        
                        <div class="form-group" style="margin-top:10px;">
                         <div class="col-sm-10">
                        		<tr>
								<td>Blood</td><br>
								<select name="bloodselect">
								<?php
								$result=mysqli_query($con,"select * from tbl_blood");
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
								<!--
                                </div>-->
                              
                    	</div>
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfathername">College</label>
                        		<input type="submit" name="sub" value="College" formaction="blood_filter_college.php">

                    	</div>
                                                <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfathername">Class</label>
                        		<input type="submit" name="sub" value="Class" formaction="blood_filter_class.php">

                    	</div>
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfathername">Department</label>
                        		<input type="submit" name="sub" value="Department" formaction="blood_filter_dept.php">

                    	</div>
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfathername">Batch</label>
                        		<input type="submit" name="sub" value="Batch" formaction="blood_filter_batch.php" >

                    	</div>

                 
             			</div>	
              </div>
         
   </div>
  </div>
   </form>
<?php
include("footer.php");
?>

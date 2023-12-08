<?php
include("header.php");
include("config.php");
?>

<form action="religion_filter_home.php" method="post">


<div class="container" style="width:100%">
        <div class="row">
            <div class="col-md-11" style="box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px;">
                <h3 style="text-align: center">RELIGION FILTER</h3>
                		<div class="form-horizontal" style="margin-left:250px;">
                        	
                            
                           
                        
                        <div class="form-group" style="margin-top:10px;">
                         <div class="col-sm-10">
                        		<tr>
								<td>Religion</td><br>
								<select name="religionselect">
								<?php
								$result=mysqli_query($con,"select * from tbl_religion");
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
								<!--
                                </div>-->
                              
                    	</div>
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfathername">College</label>
                        		<input type="submit" name="sub" value="College" formaction="religion_filter_college.php">

                    	</div>
                                                <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfathername">Class</label>
                        		<input type="submit" name="sub" value="Class" formaction="religion_filter.php">

                    	</div>
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfathername">Department</label>
                        		<input type="submit" name="sub" value="Department" formaction="religion_filter_dept.php">

                    	</div>
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfathername">Batch</label>
                        		<input type="submit" name="sub" value="Batch" formaction="religion_filter_batch.php" >

                    	</div>

                 
             			</div>	
              </div>
         
   </div>
  </div>
   </form>
<?php
include("footer.php");
?>

<?php
include("header.php");
?>
<?php
include("config.php");
?>
<form action="course_edit_update.php" method="get">
<?php
include("config.php");
if(isset($_GET["course_id"]))
{ 

		$course_id=$_GET['course_id'];

		$result=mysqli_query($con,"select *  from tbl_batch where course_id='$course_id'");
		$row1=mysqli_fetch_array($result);
		
}
?>
<div class="container" style="margin-left:250px;">
   	<div class="row">
            <div class="col-md-11" style="box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px;">
                <h3 style="text-align: center">BATCH UPDATE</h3>
                	<div class="form-horizontal">
                    <div class="form-group" style="margin-top:10px;">
                        		
                        			<div class="col-sm-10">
                           				<input type="hidden"  name="txtbatch_id" style="width:500px;" value="<?php echo $row1['batch_id']?>" >
                        			</div>
                    	</div>
				<div class="form-group" style="margin-top:10px;">
                        			<div class="col-sm-10">
                            <label>Course</label>
                <select name="select_course" class-"form-control" id="text1"required>
				<?php
				
				$result=mysqli_query($con,"select * from tbl_course");
				echo "<option>--select--</option>";
				while($row=mysqli_fetch_array($result))
				{
				
				?>
                <option value="<?php echo $row['short_name'];?>">
                <?php echo $row['short_name'];?>
                </option>
                <?php
				}
				?>
                </select>
                        				</div>
                    	</div>
                      	
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="short_name">Batch</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtshortname" style="width:500px;" value="<?php echo $row1['short_name']?>">
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
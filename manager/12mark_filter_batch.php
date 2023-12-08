<?php
include("header.php");
include("config.php");
?>
<form action="12mark_filter_batch_view.php" method="post">

<!--<div class="container" style="margin-left:250px;">
   	<div class="row">
            <div class="col-md-11" style="box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px;"><br><br>-->
                <h3 style="text-align: center"> 12TH MARK FILTER </h3>
                	<div class="form-horizontal">
                     <div class="form-group" style="margin-top:10px;">
                         <div class="col-sm-10">
                        		<tr>
								<br>
								<?php
if(isset($_POST["sub"]))
{
	    $tenmark=$_POST["tenmark"];
}else
echo 'failed';

		?>
        <input type="hidden" name="tenmark" value="<?php echo $tenmark ?>">
                        
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
<?php
include("header.php");
?>
<?php
include("config.php");
?>
<form action="location_delete_delete.php" method="get">
<?php
include("config.php");
if(isset($_GET["location_id"]))
{ 

		$location_id=$_GET['location_id'];

		$result=mysqli_query($con,"select *  from tbl_location where location_id='$location_id'");
		$row1=mysqli_fetch_array($result);
		
}
?>
<div class="container" style="margin-left:250px;">
   	<div class="row">
            <div class="col-md-11" style="box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px;">
                <h3 style="text-align: center">LOCATION DELETE</h3>
                	<div class="form-horizontal">
                    <div class="form-group" style="margin-top:10px;">
                        		
                        			<div class="col-sm-10">
                           				<input type="hidden"  name="txtlocation_id" style="width:500px;" value="<?php echo $row1['location_id']?>" >
                        			</div>
                    	</div>
				
                      	
                        <div class="form-group" style="margin-top:10px;">
                         <div class="form-group" style="margin-top:10px;">
                        <div class="col-sm-6">
                         </div>
                         		<div class="col-sm-6">
                        				<input type="submit" name ="btnSave" value="DELETE" class="btn btn-danger" style="width:65px; height:35px;"><br><br>
                    	</div>
                        <div class="col-sm-6">
                        				<input type="submit" name ="button" value="CANCEL" class="btn btn-danger" style="width:65px; height:35px;">
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
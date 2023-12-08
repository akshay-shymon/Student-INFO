<?php
include("header.php");
include("config.php");
?>
<form action="location_filter_view.php" method="post">

<div class="container" style="margin-left:250px;">
   	<div class="row">
            <div class="col-md-11" style="box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px;"><br><br>
                <h3 style="text-align: center"> FILTER LOCATION</h3>
                	<div class="form-horizontal">
                     <div class="form-group" style="margin-top:10px;">
                         <div class="col-sm-10">
                        		<tr>
								<br>
								<?php
if(isset($_POST["sub"]))
{
	    $location_id=$_POST["locationselect"];
}else
echo 'failed';

		?>
        <input type="hidden" name="locationselect" value="<?php echo $location_id ?>">
                        
                          
                       
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
<?php
include("header.php");
?>
<?php
include("config.php");
?>

<form action="location.php" method="post">

<div class="container" style="margin-left:250px;">
   	<div class="row">
            <div class="col-md-11" style="box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px;">
                <h3 style="text-align: center">LOCATION REGISTRATION</h3>
                	<div class="form-horizontal">
						<div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="location">Location</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="location" style="width:500px;">
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


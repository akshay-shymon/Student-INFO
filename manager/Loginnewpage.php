<?php
include("header.php");
include("config.php");
?>
<form action="loginnewpageaction1.php" method="post">

<!--<div class="container" style="margin-left:250px;">
   	<div class="row">
            <div class="col-md-11" style="box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px;">-->
                <h3 style="text-align: center">New Registration</h3>
                	<div class="form-horizontal">
                    
						<div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtname">Username</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtname" style="width:500px;" required>
                        			</div>
                                    <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtname">Password</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtpass" style="width:500px;" required>
                        			</div>
                                    <div class="col-sm-10">
                           				<input type="submit" value="Login" name="btnsave" style="width:500px;" required>
                        			</div>
                                    </div>
                                    </div>
                                    

<?php
include("footer.php");
?>

<?php
include("header.php");
?>
<?php
include("config.php");
?>
<form action="login_action.php" method="post">
<div class="container" style="margin-left:250px;margin-top:150px;margin-bottom:50px">
   	<div class="row">
            <div class="col-md-11" style="box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px;">
                <h3 style="text-align: center">Log In</h3>
                	<div class="form-horizontal">       
               
               <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txt_username">Username</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txt_username" >
                        			</div>
                    	</div>
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txt_password">Password</label>
                        			<div class="col-sm-10">
                           				<input type="password" name="txt_password">
                        			</div>
                                    </div>
                                    <div class="form-group" style="margin-top:10px;margin-left:0px;">
                                    <div class="col-sm-10">
<input type="submit" name="submit" value="Login">
</div>
</div>
</div>
</div>
</div>
</div>
</form>
</body>
</html>
<?php
include("Footer.php");
?>

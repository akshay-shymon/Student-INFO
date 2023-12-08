<?php
include("header.php");
include("config.php");
?>

<form action="Student_fiter_id_view.php" method="post">


<!--<div class="container" style="width:100%">
        <div class="row">
            <div class="col-md-11" style="box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px;">-->
                <h3 style="text-align: center">FILTER STUDENT</h3>
                		<div class="form-horizontal" style="margin-left:250px;">
                        	
                            <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="short_name">Enter student id</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtid" style="width:500px;">
                        			</div>  
                    	</div>
                        <div class="form-group" style="margin-top:10px;">
                        		
                        		<input type="submit" name="sub" value="Search" formaction="Student_fiter_id_view.php">

                    	</div>
                                         

                 
             			</div>	
     
   </form>
<?php
include("footer.php");
?>

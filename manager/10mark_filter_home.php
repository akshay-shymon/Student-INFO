<?php
include("header.php");
include("config.php");
?>

<form action="blood_filter_home.php" method="post">


<!--<div class="container" style="width:100%">
        <div class="row">
            <div class="col-md-11" style="box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px;">-->
                <h3 style="text-align: center">10TH MARK FILTER</h3>
                		<div class="form-horizontal" style="margin-left:250px;">
                        	
                            <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="short_name">10Th mark in (%)</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="tenmark" style="width:500px;">
                        			</div>
                         
                           
                        
                        
                              
                    	</div>
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfathername">College</label>
                        		<input type="submit" name="sub" value="College" formaction="10mark_filter_college.php">

                    	</div>
                                                <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfathername">Class</label>
                        		<input type="submit" name="sub" value="Class" formaction="10mark_filter_class.php">

                    	</div>
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfathername">Department</label>
                        		<input type="submit" name="sub" value="Department" formaction="10mark_filter_dept.php">

                    	</div>
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfathername">Batch</label>
                        		<input type="submit" name="sub" value="Batch" formaction="10mark_filter_batch.php" >

                    	</div>

                 
             			</div>	
              </div>
         
   </div>
  </div>
   </form>
<?php
include("footer.php");
?>

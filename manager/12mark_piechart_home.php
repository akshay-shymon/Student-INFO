<?php
include("header.php");
include("config.php");
?>

<form action="blood_filter_home.php" method="post">


<!--<div class="container" style="width:100%">
        <div class="row">
            <div class="col-md-11" style="box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px;">-->
                <h3 style="text-align: center">STUDENTS</h3>
                		<div class="form-horizontal" style="margin-left:250px;">
                        	
                          
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfathername">College</label>
                        		<input type="submit" name="sub" value="College" formaction="12mark_piechart_cpllege.php">

                    	</div>
                                                <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfathername">Class</label>
                        		<input type="submit" name="sub" value="Class" formaction="12mark_piechart_class.php">

                    	</div>
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfathername">Course</label>
                        		<input type="submit" name="sub" value="Course" formaction="12mark_piechart_course.php">

                    	</div>
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfathername">Batch</label>
                        		<input type="submit" name="sub" value="Batch" formaction="12mark_piechart_batch.php" >

                    	</div>

                 
             			</div>	
              </div>
         
   </div>
  </div>
   </form>
<?php
include("footer.php");
?>

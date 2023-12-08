
<?php

include("header.php");
include("config.php");


if(isset($_GET["student_id"]))
{ 

		$username=$_GET["student_id"];
		$result=mysqli_query($con,"select * from tbl_stu_all_details where student_id='$username'");
		$row=mysqli_fetch_array($result);
		
		$result1=mysqli_query($con,"select location from tbl_location where location_id='$row[location_id]'");
		$row1=mysqli_fetch_array($result1);
		
		$result2=mysqli_query($con,"select * from tbl_blood where b_id='$row[b_id]'");
		$row2=mysqli_fetch_array($result2);
		
		$result3=mysqli_query($con,"select * from tbl_religion where religion_id='$row[Religion_id]'");
		$row3=mysqli_fetch_array($result3);
		
		
}
?>
<div class="form-horizontal" style="margin-left:250px;"> 
<div class="btn">
            <form action="more_xl.php" method="post">
                <button type="submit" id="btnExport"
                    name='export' value="<?php  echo $username ?>"
                    class="btn btn-info"  style="width:85px; height:35px;">Export</button>
            </form>   
        </div>
        </div>
<form action="location_filer.php" method="post">

<div class="container" style="margin-left:250px;">
   	<div class="row">
            <div class="col-md-11" style="box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px;"><br>
                <h3 style="text-align: center">STUDENT DETAILS</h3><br><br><br>
                	<div class="form-horizontal">
                    <div class="form-group" style="margin-top:10px;">
                        		 <h3 style="text-align: center">Parent</h3>
                      </div>
             		
						<div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfathername">Father Name</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtfathername" value="<?php echo $row['Father_name'] ?>" style="width:500px;">
                        			</div>
                    	</div>
                         <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfatherjob">Father Job</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtfatherjob" value="<?php echo $row['Father_job'] ?>" style="width:500px;">
                        			</div>
                    	</div>
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtmothername">Mother Name</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtmothername" value="<?php echo $row['Mother_name'] ?>" style="width:500px;">
                        			</div>
                                    </div>
                         <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtmotherjob">Mother Job</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtmotherjob" value="<?php echo $row['Mother_job'] ?>" style="width:500px;">
                        			</div>
                    	</div>
                     
                       <div class="form-group" style="margin-top:10px;">
                        		 <h3 style="text-align: center">Guardian</h3>
                      </div>           
                      </div>
                        			
						<div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfathername">Guardian Name</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtguardian" value="<?php echo $row['Guardian_name'] ?>"  style="width:500px;">
                        			</div>
                    	</div><br><br>
                         <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfatherjob">Qualification</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtqualification" value="<?php echo $row['Qualification'] ?>" style="width:500px;">
                        			</div>
                    	</div><br><br>
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtmothername">Jobe</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtguardianjobe" value="<?php echo $row['Guardian_job'] ?>" style="width:500px;">
                        			</div>
                                    </div><br><br>
                            
                         <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtmotherjob">Relation</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtrelation" value="<?php echo $row['Relation'] ?>" style="width:500px;">
                        			</div>
                    	</div><br><br>
                        <div class="form-group" style="margin-top:10px;">
                      <h3 style="text-align: center">10th result and school</h3>
                      </div>
                                
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtmothername">school name</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtschoolname10" value="<?php echo $row['10th_school'] ?>" style="width:500px;">
                        			</div>
                                    </div>	<br><br>
						<div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfathername">result</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txt10result" value="<?php echo $row['10th_result'] ?>" style="width:500px;">
                        			</div>
                    	</div><br><br>
                         <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfatherjob">register number</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtregno10" value="<?php echo $row['10th_reg_no'] ?>" style="width:500px;">
                        			</div>
                    	</div><br><br>
                        <div class="form-group" style="margin-top:10px;">
                        		 <h3 style="text-align: center">+2 result and school</h3>
                      </div>
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtmothername">school name</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtschoolname+2" value="<?php echo $row['12th_school'] ?>" style="width:500px;">
                        			</div>
                                    </div>	<br><br>		
						<div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfathername">result</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txt+2result" value="<?php echo $row['12th_result'] ?>" style="width:500px;">
                        			</div>
                    	</div><br><br>
                         <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfatherjob">register number</label>
                        			<div class="col-sm-10">
                           				<input type="text" name="txtregno+2" value="<?php echo $row['12th_reg_no'] ?>" style="width:500px;">
                        			</div>
                    	</div><br><br>
                         <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfatherjob">Locatiion</label>
                        		<div class="col-sm-10">
                           				<input type="text" name="txtlocation" value="<?php echo $row1['location'] ?>" style="width:500px;">
                        			</div>
                    	</div><br><br>
                        <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfatherjob">Blood Group</label>
                                <div class="col-sm-10">
                           				<input type="text" name="txtbgroup" value="<?php echo $row2['b_group'] ?>" style="width:500px;">
                        			</div>
                    	</div><br><br>
                       <div class="form-group" style="margin-top:10px;">
                        		<label class="control-label col-sm-2" for="txtfatherjob">Religion</label>
                                <div class="col-sm-10">
                           				<input type="text" name="txtreligion" value="<?php echo $row3['religion'] ?>" style="width:500px;">
                        			</div>
                                   
                                
                    	</div><br><br>
                        
                       <br><br>
                    	</div>
                       
                         <div class="form-group" style="margin-top:10px;">
                        <div class="col-sm-6">
                         </div><br><br>
                         		<div class="col-sm-6">
                        				<input type="submit" name ="btnSave" value="Done" formaction="location_filter_home.php" class="btn btn-danger" style="width:65px; height:35px;">
                    	</div>
                        		</div>
                        
					</div>
			</div>
		
</form>
<?php
include("footer.php");
?>
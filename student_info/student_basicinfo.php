<?php
include("header.php");
?>
<?php
include("config.php");
?>
<form action="student_add.php" method="post">


<!--<div class="container" style="width:100%; margin-right:50%">
        <div class="row">
            <div class="col-md-11" style="box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px;">
                <h3 style="text-align: center">STUDENT DETAILS</h3>
                		<div class="form-horizontal" style="margin-left:250px;">-->
                        <h3 style="text-align: center">STUDENT DETAILS</h3>
                        	 <div class="form-group">
                        			<div class="col-sm-10">
                           				<input type="hidden" name ="btnaddnew" value="ADD NEW" class="btn btn-danger" style="width:85px; height:35px;">
                        				</div>
                    </div>
                            
                             <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777">
                        <thead>
                            <tr>
                                <th scope="col">Stu Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Gender</th>
                                 <th scope="col">Ph_no</th>
                                  <th scope="col">Place</th>
                                  <th scope="col">Course</th>
                                   <th scope="col">Batch</th>
                                   <th scope="col">Blood_Grp</th>
                                    <th scope="col">Dob</th>
                                
		<th scope="col" style="color: green">Edit</th>
                                <th scope="col" style="color: red">Delete</th>
                            </tr>
                        </thead>
                        
                        <?php
						$slno=1;
							$result=mysqli_query($con,"SELECT * FROM tbl_student");
							while($row=mysqli_fetch_array($result))
							{
								
								echo  "<tr>";
								echo "<td>" .$row['Stu_id']."</td>";
								echo "<td>" .$row['Name']."</td>";
								echo "<td>" .$row['Gender']."</td>";
								echo "<td>" .$row['Ph_no']."</td>";
								echo "<td>" .$row['Place']."</td>";
								echo "<td>" .$row['Course']."</td>";
								echo "<td>" .$row['Batch']."</td>";
								echo "<td>" .$row['Blood_group']."</td>";
								echo "<td>" .$row['Dob']."</td>";
								echo "<td><a href='student_edit.php?Stu_id=".$row ['Stu_id']."' class='glyphicon glyphicon-edit'>Edit</a> </td>";
								echo "<td><a href='student_delete.php?Stu_id=".$row ['Stu_id']."' class='glyphicon glyphicon-trash'>Delete</a> </td>";
								
								echo "</tr>";
								
							}
						?>

                    </table>
             			</div>	
            <!--  </div>
          <div>
   </div>
   </div>-->
   </form>





<?php
include("footer.php");
?>
<?php
if(isset($_POST["btnSave"]))
	{
		$studentid=$_POST["studentid"];
		$name=$_POST["txtstuname"];
		$gender=$_POST["txtgender"];
		$conatctnumber =$_POST["txtcontact"];
		$place=$_POST["placeselect"];
		$course=$_POST["courseselect"];
		$batch =$_POST["batchselect"];
		$dob =$_POST["txtdob"];
		$bloodgrp =$_POST["bloodgroupselect"];
		
		$res=mysqli_query($con,"INSERT INTO  tbl_student(Stu_id,Name,Gender,Ph_no,Place,Course,Batch,Blood_group,Dob)VALUES('$studentid','$name', '$gender', '$conatctnumber', '$place', '$course','$batch','$bloodgrp','$dob')");
		if($res)
		{
			echo "<script>alert('Student details sucessfully added');window.location='student.php	';</script>";
		}
	}
?>
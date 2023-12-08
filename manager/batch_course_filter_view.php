<?php
include("header.php");
?>
<?php
include("config.php");
?>
<table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777">
                        <thead>
                            <tr>
                                <th scope="col">Sl No</th>
                                <th scope="col">Student Id</th>
                                 <th scope="col">Name</th>
                                 <th scope="col">Email</th>                                
                                
		
                            </tr>
                        </thead>
<?php
if(isset($_POST["btnSave"]))
{
	    $course=$_POST["courseselect"];
	   	$batch=$_POST["txtbatch"];
		$location=$_POST["locationselect"];
		
  
                            $slno=1;
							$result=mysqli_query($con,"select * from tbl_basicinfo,tbl_stu_all_details where course_id='$course' && batch_id='$batch' && location_id='$location'");
							while($row=mysqli_fetch_array($result))
							{
								
								echo  "<tr>";
								echo "<td>" .$slno++."</td>";
								echo "<td>" .$row['student_id']."</td>";
								echo "<td>" .$row['name']."</td>";
								echo "<td>" .$row['email']."</td>";
								
								
							}
}
?>
</table>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
include("footer.php");
?>
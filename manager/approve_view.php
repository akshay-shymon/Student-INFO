<?php
include("header.php");
?>
<?php
include("config.php");
?>
<form action="approve_view_view.php" method="post">
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
		
  
                            $slno=1;
							$result=mysqli_query($con,"select * from tbl_basicinfo a,tbl_stu_all_details b where a.course_id='$course' && a.batch_id='$batch' && b.approve=0 && a.student_id=b.student_id ");
							while($row=mysqli_fetch_array($result))
							{
								
								echo  "<tr>";
								echo "<td>" .$slno++."</td>";
								echo "<td>" .$row['student_id']."</td>";
								echo "<td>" .$row['name']."</td>";
								echo "<td>" .$row['email']."</td>";
								echo "<td><a href='approve_view_view.php?student_id=".$row ['student_id']."' class='glyphicon glyphicon-trash'>MORE</a> </td>";							}
}
?>
</table>
</form>
	
<?php
include("footer.php");
?>
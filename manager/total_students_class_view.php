\<?php
include("header.php");
?>
<?php
include("config.php");
?>
<?php
if(isset($_POST["btnSave"]))
{
	    $course=$_POST["courseselect"];
	   	$batch=$_POST["txtbatch"];
}
?>

<div class="form-horizontal" style="margin-left:250px;"> 
<div class="btn">
            <form action="total_students_class_view_xl.php" method="post">
            <input type="hidden" name="txtcourse" value="<?php  echo $course ?>">
           
                <button type="submit" id="btnExport"
                    name='export' value="<?php  echo $batch ?>"
                    class="btn btn-info"  style="width:85px; height:35px;">Export</button>
            </form>   
        </div>
        </div>
<form action="location_filter_view_view.php" method="post">
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
							$ml=0;
							$result1=mysqli_query($con,"select * from tbl_basicinfo a,tbl_stu_all_details b where  a.student_id=b.student_id && a.course_id='$course' && a.batch_id='$batch'");
							while($row1=mysqli_fetch_array($result1))
							{	
								
								echo  "<tr>";
								$ml++;
								echo "<tr>";
									echo "<br>";				
								}
								echo "Total number of students :  ".$ml;
								echo "<br>";
							$result=mysqli_query($con,"select * from tbl_basicinfo a,tbl_stu_all_details b where  a.student_id=b.student_id && a.course_id='$course' && a.batch_id='$batch'");
						
							while($row=mysqli_fetch_array($result))
							{
								
								echo  "<tr>";
								echo "<td>" .$slno++."</td>";
								echo "<td>" .$row['student_id']."</td>";
								echo "<td>" .$row['name']."</td>";
								echo "<td>" .$row['email']."</td>";
								echo "<td><a href='location_filter_view_view.php?student_id=".$row ['student_id']."' class='glyphicon glyphicon-trash'>MORE</a> </td>";							
								}
}
?>
</table>
</form>
	
<?php
include("footer.php");
?>
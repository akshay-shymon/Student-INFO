\<?php
include("header.php");
?>
<?php
include("config.php");
?>
<?php
if(isset($_POST["sub"]))
{
	  $religion=$_POST["religionselect"];
}
?>

<div class="form-horizontal" style="margin-left:250px;"> 
<div class="btn">
            <form action="religion_filter_college_xl.php" method="post">
            
                <button type="submit" id="btnExport"
                    name='export' value="<?php  echo $religion ?>"
                    class="btn btn-info"  style="width:85px; height:35px;">Export</button>
            </form>   
        </div>
        </div>
<form action="religion_filter_view_view.php" method="post">
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
if(isset($_POST["sub"]))
{
	    
		$religion=$_POST["religionselect"];
  
                            $slno=1;
							$result=mysqli_query($con,"select * from tbl_basicinfo a,tbl_stu_all_details b where b.religion_id='$religion' && a.student_id=b.student_id");
						
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
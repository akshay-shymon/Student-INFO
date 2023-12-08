<?php
include("header.php");
include("config.php");
?>

<form action="course_add.php" method="post">


<!--<div class="container" style="width:100%">
       <div class="row">
          <div class="col-md-11" style="box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px;">-->
                <center><h3 style="text-align: center">SOURSE DETAILS</h3></center>
                		<div class="form-horizontal" style="margin-left:250px;">
                        	 <div class="form-group">
                        			<div class="col-sm-10">
                           				<input type="submit" name ="btnaddnew" value="ADD NEW" class="btn btn-danger" style="width:85px; height:35px;">
                        				</div>
                    </div>
                            
                             <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777">
                        <thead>
                            <tr>
                                <th scope="col">SL NO</th>
                                <th scope="col">Course name</th>
                                <th scope="col">Course short name</th>
		<th scope="col" style="color: green">Edit</th>
                                <th scope="col" style="color: red">Delete</th>
                            </tr>
                        </thead>
                        
                        <?php
						$slno=1;
							$result=mysqli_query($con,"SELECT * FROM tbl_course ");
							while($row=mysqli_fetch_array($result))
							{
								
								echo  "<tr>";
 								echo "<td>" .$slno++."</td>";
								echo "<td>" .$row['course_name']."</td>";
								echo "<td>" .$row['short_name']."</td>";
								echo "<td><a href='course_edit.php?course_id=".$row['course_id']."' class='glyphicon glyphicon-edit'>EDIT</a> </td>";
								echo "<td><a href='course_delete.php?course_id=".$row ['course_id']."' class='glyphicon glyphicon-trash'>DELETE</a> </td>";
								
								echo "</tr>";
								
							}
						?>

                    </table>
             			</	div>	
              
   
   </form>
<?php
include("footer.php");
?>
<?php
if(isset($_POST["btnSave"]))
	{
		$course_name=$_POST["txtcoursename"];
		$short_name=$_POST["txtshortname"];
		
		$res=mysqli_query($con,"INSERT INTO tbl_course(course_name, short_name)VALUES('$course_name', '$short_name')");
		if($res)
		{
			echo "<script>alert('inserted');window.location='';</script>";
		}
	}
?>
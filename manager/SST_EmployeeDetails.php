<?php
include("header.php");
?>
<?php
include("config.php");
?>
<form action="SST_EmployeeRegistration.php" method="post">


<div class="container" style="width:100%">
        <div class="row">
            <div class="col-md-11" style="box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px;">
                <h3 style="text-align: center">EMPLOYEE DETAILS</h3>
                		<div class="form-horizontal" style="margin-left:250px;">
                        	 <div class="form-group">
                        			<div class="col-sm-10">
                           				<input type="submit" name ="btnaddnew" value="ADD NEW" class="btn btn-danger" style="width:85px; height:35px;">
                        				</div>
                    </div>
                            
                             <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777">
                        <thead>
                            <tr>
                                <th scope="col">Sl No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Personal Email</th>
                                <th scope="col">Contact No</th>
                                <th scope="col">Office Email</th>
		<th scope="col" style="color: green">Edit</th>
                                <th scope="col" style="color: red">Delete</th>
                            </tr>
                        </thead>
                        
                        <?php
						$slno=1;
							$result=mysqli_query($con,"SELECT * FROM tblemployee where employeestatus='0' order by employeedoj ");
							while($row=mysqli_fetch_array($result))
							{
								
								echo  "<tr>";
								echo "<td>" .$slno++."</td>";
								echo "<td>" .$row['employeename']."</td>";
								echo "<td>" .$row['employeepersonalemail']."</td>";
								echo "<td>" .$row['employeeconatctnumber']."</td>";
								echo "<td>" .$row['employeecompanyemail']."</td>";
								echo "<td><a href='SST_Employee_Edit.php?_id=".$row ['employeeid']."' class='glyphicon glyphicon-edit'></a> </td>";
								echo "<td><a href='frmcardtypeReg.php?_id=".$row ['employeeid']."' class='glyphicon glyphicon-trash'></a> </td>";
								
								echo "</tr>";
								
							}
						?>

                    </table>
             			</div>	
              </div>
          <div>
   </div>
   </div>
   </form>
<?php
include("footer.php");
?>
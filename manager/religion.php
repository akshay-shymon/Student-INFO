<?php
include("header.php");
include("config.php");
?>

<form action="religion_add.php" method="post">


<div class="container" style="width:100%">
        <div class="row">
            <div class="col-md-11" style="box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px;">
                <h3 style="text-align: center">RELIGION DETAILS</h3>
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
                                <th scope="col">RELIGION</th>
		<th scope="col" style="color: green">Edit</th>
                                <th scope="col" style="color: red">Delete</th>
                            </tr>
                        </thead>
                        
                        <?php
						$slno=1;
							$result=mysqli_query($con,"SELECT * FROM tbl_religion ");
							while($row=mysqli_fetch_array($result))
							{
								
								echo  "<tr>";
 								echo "<td>" .$slno++."</td>";
								echo "<td>" .$row['religion']."</td>";
								echo "<td><a href='religion_edit.php?religion_id=".$row['religion_id']."' class='glyphicon glyphicon-edit'>EDIT</a> </td>";
								echo "<td><a href='religion_delete.php?religion_id=".$row ['religion_id']."' class='glyphicon glyphicon-trash'>DELETE</a> </td>";
								
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
<?php
if(isset($_POST["btnSave"]))
	{
		$religion=$_POST["txtreligion"];
		
		
		$res=mysqli_query($con,"INSERT INTO tbl_religion(religion)VALUES('$religion')");
		if($res)
		{
			echo "<script>alert('inserted');window.location='';</script>";
		}
	}
?>
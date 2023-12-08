<?php
include("header.php");
include("config.php");
?>
<form action="batch_name_add.php" method="post">


<div class="container" style="width:100%">
        <div class="row">
            <div class="col-md-11" style="box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px;">
                <h3 style="text-align: center">BATCH DETAILS</h3>
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
                                <th scope="col">Batch</th>
		<th scope="col" style="color: green">Edit</th>
                                <th scope="col" style="color: red">Delete</th>
                            </tr>
                        </thead>
                        
                        <?php
						$slno=1;
							$result=mysqli_query($con,"SELECT * FROM tbl_batch1 ");
							while($row=mysqli_fetch_array($result))
							{
								
								echo  "<tr>";
								echo "<td>" .$slno++."</td>";
								echo "<td>" .$row['batch']."</td>";
								echo "<td><a href='batch_name_edit.php?batch_id=".$row ['batch_id']."' class='glyphicon glyphicon-edit'>Edite</a> </td>";
								echo "<td><a href='batch_name_delete.php?batch_id=".$row ['batch_id']."' class='glyphicon glyphicon-trash'>Delete</a> </td>";
								
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
		$batch=$_POST["batch"];
		
		$res=mysqli_query($con,"INSERT INTO tbl_batch1(batch)VALUES('$batch')");
		if($res)
		{
			echo "<script>alert('inserted');window.location='batch_name.php';</script>";
		}
	}
?>
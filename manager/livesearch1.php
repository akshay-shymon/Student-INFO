
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

</head>
<body>
<?php
$xmlDoc=new DOMDocument();
$con=mysqli_connect("localhost","root","","db_student_info");
$x=$xmlDoc->getElementsByTagName('link');
$q=$_GET["q"];

if (strlen($q)>0) 
?>

<table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777">

<th scope="col">SL NO</th>
<th scope="col">batch</th>
<th scope="col">short name</th>
<th scope="col" style="color: green">EDIT</th>
<th scope="col" style="color: green">DELETE</th>

<?php
$s=1;
$sql=mysqli_query($con,"select course_id,short_name from tbl_course where course_id like '%$q%'");
while($display=mysqli_fetch_array($sql))
{
	
	
   ?>
   
<h3 style="text-align: right"><input type="submit" name ="btnaddnew" value="ADD NEW"  class="btn btn-danger" style="width:95px; height:45px;"></h3><a href='batch_add.php?course_id=".$display[]."'></a> </input>
	<?php
	 $sql1=mysqli_query($con,"select * from tbl_batch where course_id='$display[0]'");
	 while($display1=mysqli_fetch_array($sql1))
	 {
	
	echo "<tr>";
	echo "<td>".$s++."</td>";
	echo "<td>".$display1["batch"]."</td>";
	echo "<td>".$display["short_name"]."</td>";
	echo "<td><a href='batch_edit.php?batch_id=".$display1['batch_id']."' class='glyphicon glyphicon-edit'>EDIT</a> </td>";
	echo "<td><a href='course_delete.php?course_id=".$display1['course_id']."' class='glyphicon glyphicon-trash'>DELETE</a> </td>";
	echo "</tr>";
	 }
	
}


echo "</table>";

?>

<?php
if ($hint=1) 
  $response="no suggestion"; 
else 
  $response=$hint;

?> 
</body>
</html>
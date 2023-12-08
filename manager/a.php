<html>
<head>
<script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="2px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch1.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<form>
<?php
$con=mysqli_connect("localhost","root","","db_student_info");
$sql=mysqli_query($con,"select * from tbl_batch"); 
?>
<select name="actid" onChange="showResult(this.value)">
<option value="0">---Select---</option>
<?php
while($row=mysqli_fetch_array($sql))
{
?>
<option value="<?php echo $row['course_id'] ?>" ><?php echo $row['short_name'] ?></option>
<?php
}
?>
</select>
<div id="livesearch"></div>
</form>

<!--form>
<input type="te xt" size="30" onkeyup="showResult(this.value)">
<div id="livesearch"></div>
</form-->

</body>
</html> 
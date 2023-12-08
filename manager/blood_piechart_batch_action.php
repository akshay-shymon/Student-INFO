<?php
include("header.php");
include("config.php");
 
 
  $connect = mysqli_connect("localhost","root","","db_student_info");  
 $query = "SELECT * FROM tbl_blood ";  
 $result = mysqli_query($connect, $query);  

 $batch=$_POST["txtbatch"];
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>    
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['district', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          { 
						  $loc_id=$row['b_id'];
						    $sql=mysqli_query($con,"select count(*) from tbl_stu_all_details a,tbl_basicinfo b where a.location_id='$loc_id' && a.student_id=b.student_id && batch_id='$batch' && approve=1");
						     $row1=mysqli_fetch_array($sql);
						  
						   
                               echo "['".$row["b_group"]."', ".$row1["0"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage ',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div style="width:900px;">  
                <h3 align="center">Pie Chart</h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
      </body>  
 </html>  
</body>
</html>
<?php
include("footer.php");
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
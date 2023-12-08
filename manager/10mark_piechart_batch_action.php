<?php
include("header.php");
include("config.php");
 
 
  $connect = mysqli_connect("localhost","root","","db_student_info");  
 $query = "SELECT * FROM tbl_stu_all_details ";  
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
						 
                         $row = mysqli_fetch_array($result);
						  
						    $sql=mysqli_query($con,"select count(*) from tbl_stu_all_details a,tbl_basicinfo b where a.10th_result<=50 && a.student_id=b.student_id group by 10th_result<=50 and b_id='$batch'");
						     $row1=mysqli_fetch_array($sql);
						  
						   
                               echo "['"."<=50"."', ".$row1["0"]."],";
							   
							    
						    $sql=mysqli_query($con,"select count(*) from tbl_stu_all_details a,tbl_basicinfo b where a.10th_result between 51 and 60  && a.student_id=b.student_id and b_id='$batch'");
						     $row1=mysqli_fetch_array($sql);
						  
						   
                               echo "['"."51-60"."', ".$row1["0"]."],";
							   
							       $sql=mysqli_query($con,"select count(*) from tbl_stu_all_details a,tbl_basicinfo b where a.10th_result between 61 and 70  && a.student_id=b.student_id and b_id='$batch'");
						     $row1=mysqli_fetch_array($sql);
						  
						   
                               echo "['"."61-70"."', ".$row1["0"]."],"; 
							   
							    $sql=mysqli_query($con,"select count(*) from tbl_stu_all_details a,tbl_basicinfo b where a.10th_result between 71 and 80  && a.student_id=b.student_id and b_id='$batch'");
						     $row1=mysqli_fetch_array($sql);
						  
						   
                               echo "['"."71-80"."', ".$row1["0"]."],";  
							   
							    $sql=mysqli_query($con,"select count(*) from tbl_stu_all_details a,tbl_basicinfo b where a.10th_result between 81 and 90  && a.student_id=b.student_id and b_id='$batch'");
						     $row1=mysqli_fetch_array($sql);
						  
						   
                               echo "['"."81-90"."', ".$row1["0"]."],"; 
							   
							    $sql=mysqli_query($con,"select count(*) from tbl_stu_all_details a,tbl_basicinfo b where a.10th_result between 91 and 100  && a.student_id=b.student_id and b_id='$batch'");
						     $row1=mysqli_fetch_array($sql);
						  
						   
                               echo "['"."91-100"."', ".$row1["0"]."],"; 
							     
						  
                          
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
?>
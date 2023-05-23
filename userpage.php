<?php
include 'connection.php';
include 'header.php';
?>
<html>
	<head>
	<style>
		body  {
  background-color:green;
    
  
}
		</style>
		</head>
<body>
<div class="container" style="margin-top:70px;">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<h3><center><b style="color:white">Customer Report</b></center></h3>
<?php
	session_start();
	$cno=$_SESSION['name'];
$tot=0;$ct=0;
$sql ="SELECT * FROM booking WHERE number='".$cno."'";
$res=mysqli_query($con,$sql);
echo"<table class='table' style='background-color:#f5b07f;'><tr><th>Name</th><th>Number</th><th>qty</th><th>carid</th><th>Amount</th><th>Date</th><th>Address</th></tr>";
while($row=mysqli_fetch_array($res))
{
echo"<tr><td>".$row['name']."</td>";
echo"<td>".$row['number']."</td>";
echo"<td>".$row['qty']."</td>";
echo"<td>".$row['carid']."</td>";
echo"<td>".$row['amt']."</td>";
echo"<td>".$row['date']."</td>";
echo"<td>".$row['ads']."</td></tr>";
$tot+=$row['amt'];
$ct+=1;

}
echo"</table>";
echo "<div id='' style='background-color:#f5b07f;'><b>Total Sales Amount   :</b>";
echo $tot;
echo "<br><b>Total Number Of Buying :</b>";
echo $ct;
echo"</div>";

?>
</div>
<div class="col-md-4"></div>
</div>
</div>
</body>
</html>
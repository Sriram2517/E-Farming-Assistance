<html>
<body>
<div class="container">
<div class="row">

<?php
include'adminheader.php';
include'connection.php';
?>
<h3><center><b>Organization Achievement</b></center></h3>
<?php
$ct=0;
session_start();
$cname=$_SESSION['name'];
$sql="SELECT * FROM achievement";
			$res=mysqli_query($con,$sql);
echo"<table class='table'><tr><th>S.No</th><th>Date</th><th>Achievement</th></tr>";
while($r=mysqli_fetch_array($res))
			{
				$ct+=1;
echo"<tr><td>".$ct."</td><td>".$r['date']."</td><td>".$r['achievement']."</td></tr>";
}
echo"</table>";
?>
</div>
</div>
</body>
</html>
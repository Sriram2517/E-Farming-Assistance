<html>
<body>
<div class="container">
<div class="row">

<?php
include'adminheader.php';
include'connection.php';
?>
<div class="col-md-12" >
<h3><center><b>Register Companey Profile</b></center></h3>
<?php
$ct=0;
$sql="SELECT * FROM orgreg";
			$res=mysqli_query($con,$sql);
echo"<table class='table'><tr><th>S.No</th><th>Name</th><th>Id</th><th>Address</th><th>Domain</th><th>Register Date</th><th>Contact Number</th><th>Mail Id</th></tr>";
while($r=mysqli_fetch_array($res))
			{
				$ct+=1;
echo"<tr><td>".$ct."</td><td>".$r['name']."</td><td>".$r['cid']."</td><td>".$r['address']."</td><td>".$r['domain']."</td><td>".$r['rdate']."</td><td>".$r['number']."</td><td>".$r['mail']."</td></tr>";
}
echo"</table>";
?>
</div>
</div>
</div>
</body>
</html>
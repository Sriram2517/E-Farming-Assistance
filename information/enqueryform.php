<html>
<body>
<div class="container">
<div class="row">
<?php
include'connection.php';
include'organizationheader.php';
?>
</div>
<div class="row">


<div class="col-md-4">

</div>
<div class="col-md-4" style="border-style:solid;">
<h3><center><b>Employee Enquery Profile</b></center></h3>
<form method="post">
<div class="form-group">
<label for="">SSN Number</label>
<input type="number" name="number" required class="form-control">
</div>
<div class="form-group">
<input type="submit" name="submit" required class="btn btn-success">
</div>
</form>
</div>
<div class="col-md-4"></div>
</div>
<div class="row">
<?php
if(isset($_POST['submit']))
{
	session_start();
	$name=$_SESSION['name'];
	$number=$_POST['number'];
	$sqlc="SELECT * FROM approved WHERE cid='".$number."' AND cname='".$name."'";
$resc=mysqli_query($con,$sqlc);
$rowc=mysqli_fetch_assoc($resc);
if($rowc>=1)
{
$sql="SELECT * FROM approved WHERE cid='".$number."'AND cname='".$name."'";
$res=mysqli_query($con,$sql);
echo"<table class='table-bordered'><tr><th>Company Name</th><th>Employee Name</th><th>SSN No.</th><th>Address</th><th>Domain</th><th>Joining Date</th><th>Contact Number</th><th>Eail</th><th>Salary</th><th>SSLC</th><th>HSC</th><th>Diploma</th><th>UG</th><th>PG</th><th>Dr</th><th>Aadhar</th><th>Emp_ID</th><th>Reliving date</th><th>Reliving Domain</th><th>Reliving Salary</th><th>Status</th></tr>";
while($r=mysqli_fetch_array($res))
{
echo"<tr><td>".$r['cname']."</td><td>".$r['name']."</td><td>".$r['cid']."</td><td>".$r['address']."</td><td>".$r['domain']."</td><td>".$r['rdate']."</td><td>".$r['number']."</td><td>".$r['mail']."</td><td>".$r['salary']."</td><td>".$r['sslc']."</td><td>".$r['hsc']."</td><td>".$r['dc']."</td><td>".$r['ug']."</td><td>".$r['pg']."</td><td>".$r['dd']."</td><td>".$r['ac']."</td><td>".$r['eid']."</td><td>".$r['reldate']."</td><td>".$r['rdomain']."</td><td>".$r['rsalary']."</td><td>".$r['status']."</td></tr>";
}
echo"</table>";
}
	else
	{
		echo "<script>
		alert('Wrong SSN Number');
		
		</script>";
	}
}
?>

</div>
</div>
</body>
</html>
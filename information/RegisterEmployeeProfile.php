<html>
<body>
<div class="container">
<div class="row">

<?php
include'organizationheader.php';
include'connection.php';
?>
<h3><center><b>Register Employee Profile</b></center></h3>
<?php
session_start();
$cname=$_SESSION['name'];
$sql="SELECT * FROM approved WHERE cname='".$cname."'";
$res=mysqli_query($con,$sql);
echo"<table class='table-bordered'><tr><th>Company Name</th><th>Employee Name</th><th>SSN No.</th><th>Address</th><th>Domain</th><th>Joining Date</th><th>Contact Number</th><th>Eail</th><th>Salary</th><th>SSLC</th><th>HSC</th><th>Diploma</th><th>UG</th><th>PG</th><th>Dr</th><th>Aadhar</th><th>Emp_ID</th><th>Reliving date</th><th>Reliving Domain</th><th>Reliving Salary</th><th>Status</th></tr>";
while($r=mysqli_fetch_array($res))
			{


echo"<tr><td>".$r['cname']."</td><td>".$r['name']."</td><td>".$r['cid']."</td><td>".$r['address']."</td><td>".$r['domain']."</td><td>".$r['rdate']."</td><td>".$r['number']."</td><td>".$r['mail']."</td><td>".$r['salary']."</td><td>".$r['sslc']."</td><td>".$r['hsc']."</td><td>".$r['dc']."</td><td>".$r['ug']."</td><td>".$r['pg']."</td><td>".$r['dd']."</td><td>".$r['ac']."</td><td>".$r['eid']."</td><td>".$r['reldate']."</td><td>".$r['rdomain']."</td><td>".$r['rsalary']."</td><td>".$r['status']."</td></tr>";
}
echo"</table>";
?>
</div>
</div>
</body>
</html>

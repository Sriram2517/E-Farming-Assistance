<html>
<body>
<div class="container">
<div class="row">

<?php
include'organizationheader.php';
include'connection.php';
?>
<h3><center><b>New Employee Registration</b></center></h3>
<div class="col-md-1"></div>
<div class="col-md-4" style="border-style:solid;">
<h3><center><b>Persional Details</b></center></h3>
<form method="post">


<div class="form-group">
<label for="">Name</label>
<input type="text" name="name" required class="form-control">
</div>
<div class="form-group">
<label for="">Address</label>
<textarea name="address" required class="form-control" style="resize:none";></textarea>
</div>
<div class="form-group">
<label for="">Contact Number</label>
<input type="number" name="number" required class="form-control">
</div>
<div class="form-group">
<label for="">Mail</label>
<input type="Mail" name="mail" required class="form-control">
</div>
<div class="form-group">
<label for="">Date Of Birth</label>
<input type="date" name="dob" required class="form-control">
</div>
<div class="form-group">
<label for="">Domain</label>
<input type="text" name="domain" required class="form-control">
</div>
<div class="form-group">
<label for="">Joning Date</label>
<input type="date" name="rdate" required class="form-control">
</div>

<div class="form-group">
<label for="">Salary</label>
<input type="number" name="salary" required class="form-control">
</div>
</div>
<div class="col-md-2">



</div>
<div class="col-md-4" style="border-style:solid;">
<h3><center><b>Acadamic And Id Proff Details</b></center></h3>
<div class="form-group">
<label for="">Employee Id</label>
<input type="number" name="eid" required class="form-control">
</div>
<div class="form-group">
<label for="">SSLC Certificate Number</label>
<input type="number" name="sslc" required class="form-control">
</div>
<div class="form-group">
<label for="">HSC Certificate Number</label>
<input type="number" name="hsc" required class="form-control">
</div>
<div class="form-group">
<label for="">Diploma Certificate Number</label>
<input type="number" name="dc" required class="form-control">
</div>
<div class="form-group">
<label for="">UG Certificate Number</label>
<input type="number" name="ug" required class="form-control">
</div>
<div class="form-group">
<label for="">PG Certificate Number</label>
<input type="number" name="pg" required class="form-control">
</div>
<div class="form-group">
<label for="">Doctorate Certificate Number</label>
<input type="number" name="dd" required class="form-control">
</div>
<div class="form-group">
<label for="">Aadhar Card Number</label>
<input type="number" name="ac" required class="form-control">
</div>
<div class="form-group">
<input type="submit" value="Register" name="submit" required class="btn btn-success">
</div>
</form>
</div>
</div>
</div>
</body>
</html>
<?php
session_start();
if(isset($_POST['submit']))
{
	$cname=$_SESSION['name'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	$domain=$_POST['domain'];
	$rdate=$_POST['rdate'];
	$number=$_POST['number'];
	$salary=$_POST['salary'];
	$mail=$_POST['mail'];
	$sslc=$_POST['sslc'];
	$hsc=$_POST['hsc'];
	$dc=$_POST['dc'];
	$ug=$_POST['ug'];
	$pg=$_POST['pg'];
	$dd=$_POST['dd'];
	$ac=$_POST['ac'];
	$eid=$_POST['eid'];
		$cid=(rand(100000,1000000));

	$sqlc="SELECT * FROM empreg WHERE cid='".$cid."' AND sslc='".$sslc."'";
$resc=mysqli_query($con,$sqlc);
$row=mysqli_num_rows($resc);
			if($row>=1)
			{
				echo "<script>
		alert('Already Register');
		window.location.href='newamployeeregistration.php';
		</script>";
			}
			else
	{
		
			$sql="INSERT INTO empreg(  cname,name,cid,address,domain,rdate,number,mail,salary,sslc,hsc,dc,ug,pg,dd,ac,eid)VALUES('".$cname."','".$name."','".$cid."','".$address."','".$domain."','".$rdate."','".$number."','".$mail."','".$salary."','".$sslc."','".$hsc."','".$dc."','".$ug."','".$pg."','".$dd."','".$ac."','".$eid."')";
			echo $sql;
	$result=mysqli_query($con,$sql);
	if($result)
	{
		echo "<script>
		alert('Registration Success ,Your SSN ID $cid')
		
		window.location.href='newamployeeregistration.php';
		</script>";
	}
	else
	{
		echo "<script>
		alert('Registration Failed');
		window.location.href='newamployeeregistration.php';
		</script>";
	}
			
	}
}
?>
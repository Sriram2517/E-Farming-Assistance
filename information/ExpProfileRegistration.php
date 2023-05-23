<html>
<body>
<div class="container">
<div class="row">

<?php
include'connection.php';
include'organizationheader.php';
?>

<div class="col-md-4"></div>
<div class="col-md-4" style="border-style:solid;">
<h3><center><b>Experince Employee Registration</b></center></h3>
<form method="post">
<div class="form-group">
<label for="">Enter Employee SSN No</label>
<input type="number" name="ssn" required class="form-control">
</div>
<div class="form-group">
<label for="">Domain</label>
<input type="text" name="domain" required class="form-control">
</div>
<div class="form-group">
<label for="">Salary</label>
<input type="number" name="salary" required class="form-control">
</div>
<div class="form-group">
<label for="">Employee ID</label>
<input type="number" name="eid" required class="form-control">
</div>
<div class="form-group">
<input type="submit" name="submit" value="Register" required class="btn btn-success">
</div>
</form>

</div>
<div class="col-md-4"></div>
</div>
</div>
</body>
</html>

<?php

if(isset($_POST['submit']))
{
	session_start();
	$cname=$_SESSION['name'];
	$cid=$_POST['ssn'];
	$salary=$_POST['salary'];
	$date=date('Y/m/d');
	$domain=$_POST['domain'];
		$sqlc="SELECT * FROM empreg WHERE cid='".$cid."' AND cname='".$cname."'";
$resc=mysqli_query($con,$sqlc);
$row=mysqli_num_rows($resc);
			if($row>=1)
			{
				echo "<script>
		alert('Already Register');
		window.location.href='ExpProfileRegistration.php';
		</script>";
			}
			else
	{
	$sqlid="SELECT * FROM approved where cid='".$_POST['ssn']."'";
	$resultd=mysqli_query($con,$sqlid);
	$rowd=mysqli_num_rows($resultd);
	if($rowd>=1)
	{
		$sqlv="SELECT * FROM approved where cid='".$_POST['ssn']."'";
	$resv=mysqli_query($con,$sqlv);
	while($r=mysqli_fetch_array($resv))
	{
		$name=$r['name'];
		$address=$r['address'];
		$number=$r['number'];
		$mail=$r['mail'];
		$sslc=$r['sslc'];
		$hsc=$r['hsc'];
		$dc=$r['dc'];
		$ug=$r['ug'];
		$pg=$r['pg'];
		$dd=$r['dd'];
		$ac=$r['ac'];
		$eid=$r['eid'];
	}
	
		$sqli="INSERT INTO empreg(  cname,name,cid,address,domain,rdate,number,mail,salary,sslc,hsc,dc,ug,pg,dd,ac,eid)VALUES('".$cname."','".$name."','".$cid."','".$address."','".$domain."','".$date."','".$number."','".$mail."','".$salary."','".$sslc."','".$hsc."','".$dc."','".$ug."','".$pg."','".$dd."','".$ac."','".$eid."')";
		$resulti=mysqli_query($con,$sqli);
	if($resulti)
	{
		echo "<script>
		alert('ok');
window.location.href='ExpProfileRegistration.php';
		</script>";
	}
		else
		{
			echo "<script>
		alert('Not');
		window.location.href='ExpProfileRegistration.php';
		</script>";
		}
	}
	else
	{
		echo "<script>
		alert('Wrong SSN No');
window.location.href='ExpProfileRegistration.php';
		</script>";
	}
	
	
	
	}
}
		?>
<html>
<body>
<div class="container">
<div class="row">
<?
include'connection.php';
include'organizationheader.php';
?>
<div class="col-md-4"></div>
<div class="col-md-4">
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
<input type="submit" name="submit" value="Register" required class="form-control">
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
	$salary=$_POST['salary'];
	$date=date('Y/m/d');
	$domain=$_POST['domain'];
	$cid=$_POST['ssn'];
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
	
		$sqli="INSERT INTO empreg(  cname,name,cid,address,domain,rdate,number,mail,salary,sslc,hsc,dc,ug,pg,dd,ac,eid,status)VALUES('".$cname."','".$name."','".$cid."','".$address."','".$domain."','".$rdate."','".$number."','".$mail."','".$salary."','".$sslc."','".$hsc."','".$dc."','".$ug."','".$pg."','".$dd."','".$ac."','".$eid."','".$cancel."')";
		$resulti=mysqli_query($con,$sqli);
	if($resulti)
	{
		echo "<script>
		alert('ok');
		
		</script>";
	}
		else
		{
			echo "<script>
		alert('Not');
		
		</script>";
		}
}
		?>
<html>
<body>
<div class="container">
<div class="row">
<?php
include'adminheader.php';
include'connection.php';
?>
<div class="col-md-4"></div>
<div class="col-md-4" style="border-style:solid;">
<h3><center><b>Organization Registration</b></center></h3>
<form method="post">
<div class="form-group">
<label for="">Organization Name</label>
<input type="text" name="name" required class="form-control">
</div>
<div class="form-group">
<label for="">GST /Tin Number</label>
<input type="text" name="id" required class="form-control">
</div>
<div class="form-group">
<label for="">Address</label>
<textarea name="address" required class="form-control" style="resize:none";></textarea>
</div>
<div class="form-group">
<label for="">Domain</label>
<input type="text" name="domain" required class="form-control">
</div>
<div class="form-group">
<label for="">Registration Date</label>
<input type="date" name="rdate" required class="form-control">
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
<label for="">Password</label>
<input type="password" name="pwd" required class="form-control">
</div>
<div class="form-group">
<label for="">Confirm Password</label>
<input type="password" name="cpwd" required class="form-control">
</div>
<div class="form-group">

<input type="submit" value="Register" name="submit" required class="btn btn-success">
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
	$name=$_POST['name'];
	$cid=$_POST['id'];
	$address=$_POST['address'];
	$domain=$_POST['domain'];
	$rdate=$_POST['rdate'];
	$number=$_POST['number'];
	$pwd=$_POST['pwd'];
	$cpwd=$_POST['cpwd'];
	$mail=$_POST['mail'];
	
		$sqlc="SELECT * FROM empreg WHERE cid='".$cid."'";
$resc=mysqli_query($con,$sqlc);
$row=mysqli_num_rows($resc);
			if($row>=1)
			{
				echo"<script language='javascript'>";
				echo"alert('Already Register')";
				echo"</script>";
			}
			else
	{
		
		if($pwd==$cpwd)
		{
			$sql="INSERT INTO orgreg( name,cid,address,domain,rdate,number,pwd,mail)VALUES('".$name."','".$cid."','".$address."','".$domain."','".$rdate."','".$number."','".$pwd."','".$mail."')";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		echo "<script>
		alert('Registration Success');
		window.location.href='companeyregistration.php';
		</script>";
	}
	else
	{
		echo "<script>
		alert('Registration Failed');
		window.location.href='companeyregistration.php';
		</script>";
	}
			
		}
		else
		{
	
			echo "<script>
		alert('Password Missmatch');
		window.location.href='companeyregistration.php';
		</script>";
		}
	}
}
?>
<html>
<body>
<div class="container">
<div class="row">
<?php
include'organizationheader.php';
include'connection.php';
?>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4" style="border-style:solid;">
<h3><center><b>Achievement Registration</b></center></h3>
<form method="post">
<div class="form-group">
<label for="">Achievement</label>
<textarea name="achievement" class="form-control" required style="resize:none;"></textarea>
</div>
<div class="form-group">
<input type="submit" name="submit" value="Register" class="btn btn-info" required ></textarea>
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
	$number=$_SESSION['name'];
	$achievement=$_POST['achievement'];
	$date = date('Y/m/d');
		$sql="INSERT INTO achievement( date,number,achievement)VALUES('".$date."','".$number."','".$achievement."')";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		echo "<script>
		alert('Registration Success');
		window.location.href='achievementreg.php';
		</script>";
	}
	else
	{
		echo "<script>
		alert('Registration Success');
		window.location.href='achievementreg.php';
		</script>";
	}
		
	
}

?>
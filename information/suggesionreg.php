<html>
<body>
<div class="container">
<div class="row">
<?php
include'adminheader.php';
include'connection.php';
?>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4" style="border-style:solid;">
<h3><center><b>Suggesion Registration</b></center></h3>
<form method="post">
<div class="form-group">
<label for="">GST/Tin Number</label>
<input type="number" name="number" class="form-control" required>
</div>
<div class="form-group">
<label for="">Suggesion</label>
<textarea name="suggesion" class="form-control" required style="resize:none;"></textarea>
</div>
<div class="form-group">
<input type="submit" name="submit"  class="btn btn-info" required ></textarea>
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
	$number=$_POST['number'];
	$suggesion=$_POST['suggesion'];
	$date = date('Y/m/d');
	$sq="SELECT * FROM orgreg WHERE cid='".$number."'";
	$re=mysqli_query($con,$sq);
	$rc=mysqli_num_rows($re);
	if($rc>=1)
	{
		$sql="INSERT INTO suggesion( date,number,suggesion)VALUES('".$date."','".$number."','".$suggesion."')";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		echo "<script>
		alert('Registration Success');
		window.location.href='suggesionreg.php';
		</script>";
	}
	else
	{
		echo "<script>
		alert('Registration Success');
		window.location.href='suggesionreg.php';
		</script>";
	}
		
	}
	else
	{
	echo "<script>
		alert('Wrong GST/Tin Number');
		window.location.href='suggesionreg.php';
		</script>";
	}
}

?>
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
<h3><center><b>Promotion/Demotion</b></center></h3>
<form method="post">
<div class="form-group">
<label>Enter Employee SSN No:</label>
<input type="number" name="ssn" class="form-control" required>
</div>
<div class="form-group">
<label>Domain:</label>
<input type="text" name="jdomain" class="form-control" required>
</div>
<div class="form-group">
<label>Salary:</label>
<input type="number" name="jsalary" class="form-control" required>
</div>
<div class="form-group">
<input type="submit" name="submit" Value="Update" class="btn btn-success">
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
	$sqlc="SELECT * FROM approved WHERE cid='".$_POST['ssn']."'";
	echo $sqlc;
	$res=mysqli_query($con,$sqlc);
	$row=mysqli_num_rows($res);
	if($row>=1)
	{
	session_start();
	$name=$_SESSION['name'];
	$number=$_POST['ssn'];
	$jdate=date('Y/m/d');
	$jdomain=$_POST['jdomain'];
	$jsalary=$_POST['jsalary'];
	$sql="UPDATE approved SET reldate='".$jdate."',rdomain='".$jdomain."',rsalary='".$jsalary."' WHERE cname='".$name."' AND cid='".$number."'";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		echo "<script>
		alert('Success');
		window.location.href='EmployeeProfileUpdation.php';
		</script>";
	}
	else
	{
		echo "<script>
		alert('Retry');
		window.location.href='EmployeeProfileUpdation.php';
			</script>";
	}
	
	}
		else
		{
	echo "<script>
		alert('Wrong SSN No');
		window.location.href='EmployeeProfileUpdation.php';
		</script>";
		}
}
?>
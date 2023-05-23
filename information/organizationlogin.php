
<html>
<body>
<div class="container">
<div class="row">

<?php
include'header.php';
include'connection.php';
?>
</div>
<div class="row">
<img src="images/bg1.jpg" class="img-thumbnail" style="width:100%;height:80%;">
<div class="col-md-4"></div>
<div class="col-md-4" style="margin-top:-34%; background-color:white;">
<h3><center><b>Organization Login</b></center></h3>
<form method="post" >
<div class="form-group">
<label for="">GST/Tin Number</label>
<Input type="text" class="form-control" name="un">
</div>
<div class="form-group">
<label for="">Password</label>
<Input type="password" class="form-control" name="pwd">
</div>
<div class="form-group">
<Input type="submit" value="login" class="btn btn-success" name="login">
</div>
</form>
</div>
<div class="col-md-4"></div>

</div>
</div>
</body>
</html>
<?php
session_start();
if(isset($_POST['login']))
{
	$un=$_POST['un'];
	$pwd=$_POST['pwd'];
	$sql="SELECT * FROM orgreg WHERE cid='".$un."' AND pwd='".$pwd."'";
	$run= mysqli_query($con,$sql);
	$row= mysqli_fetch_assoc($run);
	if($row>=1)
	{
		$_SESSION['name']=$un;
		header('location:organizationpage.php');
	echo"ok";
	}
	else
	{
		echo "<script>
		alert('Retry');
		window.location.href='organizationlogin.php';
		</script>";
	}
	
}
?>
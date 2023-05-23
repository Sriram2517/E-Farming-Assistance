
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
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4" style="margin-top:-34%; background-color:white;">
<h3><center><b>Admin Login</b></center></h3>
<form method="post" >
<div class="form-group">
<label for="">User Name</label>
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
if(isset($_POST['login']))
{
	session_start();
	$un=$_POST['un'];
	$pwd=$_POST['pwd'];
	$sql="SELECT * FROM login WHERE un='".$un."' AND pwd='".$pwd."' AND type='1'";
	$run= mysqli_query($con,$sql);
	$row= mysqli_fetch_assoc($run);
	if($row>=1)
	{
		$_SESSION['name']=$un;
		header('location:adminpage.php');
	}
	else
	{
		echo "<script>
		alert('Retry');
		window.location.href='adminlogin.php';
		</script>";
	}
	
}
?>

<html>
<head>
<Style>
</style>
</head>
<body style="background-color:cyan">
<div class="container" style="Margin-top:50px;">
<div class="row">
<div class="col-md-3">
<?php
	include'connection.php';
	include'header.php';
if(isset($_POST['submit']))
{
	$amt=0;
	$name=$_POST['name'];
	$number=$_POST['number'];
	$pas1=$_POST['pas1'];
	$pas2=$_POST['pas2'];
	$ads=$_POST['ads'];
	$dates = date('d/m/y');
	if($pas1==$pas2)
	{
	$sql="INSERT INTO user( name,number,pas1,pas2,date,ads) VALUES('".$name."','".$number."','".$pas1."','".$pas2."','".$dates."','".$ads."')";
		$result=mysqli_query($con,$sql);
		if($result)
		{
			header('location:info.php');
		}
		else
		{
			echo "Not";
			
		}
	}
	else
	{
		echo"<script language='javascript'>";
		echo"alert('Password Not Matched')";
		echo "</script>";
	}
}
?>
</div>


<div class="col-md-6" style='background-color:#f5b07f;'>
<h3><i><center><b>USER REGISTRATION</b><center></h3></i>

<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
<label for="">Name</label>
<input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
</div>
<div class="form-group">
<label for="">Number</label>
<input type="number" class="form-control" name="number" placeholder="Enter Your Contact Number" required>
</div>
<div class="form-group">
<label for="">Password</label>
<input type="password" class="form-control" name="pas1" placeholder="Enter Your Password" required>
</div>
<div class="form-group">
<label for="">Confirm Password</label>
<input type="password" class="form-control" name="pas2" placeholder="Enter Your Confirm Password" required>
</div>
<div class="form-group">
<label for="">Address</label>
<textarea class="form-control" name="ads" placeholder="Enter Delivery Address" required noresize style="height:25%;"></textarea>
</div>
<div class="form-group">
<label for=""></label>
<input type="submit" class="form-control btn btn-success" name="submit" value="Register">
</div>
</form>
</div>
</div>
</div>

</body>
</html>
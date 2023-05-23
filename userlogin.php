<?php
	include 'connection.php';
	include 'header.php';
?>
<?php
session_start();
?>
<?php
	if(isset($_POST['submit']))
	{	
		$number=$_POST['number'];
		$password=$_POST['password'];
		$sql="SELECT * From user where number='".$number."' AND pas1='".$password."'";
		$run= mysqli_query($con,$sql);
		$row= mysqli_fetch_assoc($run);
		if($row)
		{	
			$_SESSION['name']=$number;
			echo $_SESSION['name'];
			header('location:userpage.php');
		}
		else
		{
			echo '<script language="javascript">';
			echo 'alert(User Name Or Password InCorrect...!)';  
			echo '</script >';
		}
	}	
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<style>
		body
		{
			background-color:green;
		}
		</style>
	</head>
<body>	

	<div class="container" style="background-color:green;margin-top:70px;">
		<div class="row">
		<div class="col-md-4"></div>
		
		<div class="col-md-4" style="border-style:solid;background-color:#f5b07f;">
			<h3><b><center style="color:white">USER LOGIN</center></b></h3>
			<br>
			<center><img src="images/user.png" class="img-circle" style="width:150px;height:150px;"></center>
			<hr>
			
			<form name="" action="" method="post">
				<div class="form-group">
				<label>Enter Contact Number</label>
					<input type="number"  class="form-control" name="number" placeholder="Enter Your Number" required>
				</div>
				<div class="form-group">
				<label>Enter Password</label>
					<input type="password"  class="form-control" name="password" placeholder="Enter Your Password" required>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-success" name="submit" Value="submit" id="submit">
				</div>
			</form>
			<form action="user.php">
<div class="form-group">
<label>User Registration</label>
<input type="submit" name="goto" value="Register" class="btn btn-primary form-control"></button>
</div>
</form>
		</div>
		</div>
	</div>
</body>
</html>
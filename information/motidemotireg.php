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
<h3><center><b>Promotion / Demotion</b></center></h3>
<div class="col-md-4"></div>
<div class="col-md-4">
<form method="post" >
<div class="form-group">
<label>SSN</label>
<input type="number" name="number"  class="form-control " required >
</div>
<div class="form-group">
<input type="submit" name="submit"  class="form-control" required >
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
	$sql="SELECT * FROM empreg WHERE cid='".$number."'";
	$res=mysqli_query($con,$sql);
		while($r=mysqli_fetch_array($res))
		{
		echo "<form method='post'><div class='form-control><label for=''>Name</label><input type='text' name='name' class='form-control' value='".$r['name']."'></div>";
		echo "<div class='form-control><label for=''>Name</label><input type='text' name='name' class='form-control' value='".$r['domain']."'></div>";
	echo "<div class='form-control><label for=''>Date Of Join</label><input type='text' name='name' class='form-control' value='".$r['rdate']."'></div>";
	echo "<div class='form-control><input type='text' name='name' class='form-control' value='".$r['name']."'></div>";
		}
	
}
?>
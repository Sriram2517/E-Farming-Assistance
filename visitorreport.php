<html>
<head>
<style>
body
{
	
}
		input[type=number]::-webkit-inner-spin-button, 
			input[type=number]::-webkit-outer-spin-button 
			{ 
				-webkit-appearance: none; 
				margin: 0; 
			}
			.my-custom-scrollbar
			{
				margin-top:10px;
				position: relative;
				height: 300px;
				overflow: auto;
			}
			.table-wrapper-scroll-y 
			{
				display: block;
			}
			.my-custom-scrollbar1
			{
				margin-top:px;
				position: relative;
				height: 600px;
				overflow: auto;
			}
			.table-wrapper-scroll-y1 
			{
				display: block;
			}

</style>
</head>
<body style="background-color:green;">
<div class="container" style="margin-top:70px; background-color:green;">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-4">
<h3><center><b style="color:white">APPOINMENT REPORT</b></center></h3>
<form method="post" action="" >
<div class="form-group">
<label for=""></label>
<input type="text" class="form-control" name="sdate" placeholder="Enter Starting date E.g(2005-02-20)" required>
</div>
<div class="form-group">
<label for=""></label>
<input type="text" class="form-control" name="edate" placeholder="Enter Ending date E.g(2005-02-20)" required>
</div>
<div class="form-group">
<input type="submit" class="form-control btn btn-info" name="submit" value="submit">
</div>
</form>
</div>
<div class="col-md-4">
<h3><center><b style="color:white">Customer Report</b></center></h3>
<form method="post" action="" >
<div class="form-group">
<label for=""></label>
<input type="Number" class="form-control " name="cno" placeholder="Enter Customer Number" required>
</div>
<div class="form-group">
<input type="submit" class="form-control btn btn-info" name="confirm" value="submit">
</div>
</form>
</div>
<div class="col-md-2"></div>
</div>
<div class="table-wrapper-scroll-y my-custom-scrollbar">
<?php
include 'header.php';
include 'connection.php';
if(isset($_POST['submit']))
{
$tot=0;$ct=0;
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];
$sql ="SELECT * FROM appoinment
 WHERE date >= '".$_POST['sdate']."' AND date <= '".$_POST['edate']."'";
$res=mysqli_query($con,$sql);
echo "<table class='table'>
user,rdate,date,time,n1,n2,n3,n4,a1,a2,a3,a4,an1,an2,an3,an4
<th></th>
<th></th>
";
while($row=mysqli_fetch_array($res))
{
	
echo"<tr><td>".$row['user']."</td>";
echo"<td>".$row['rdate']."</td>";
echo"<td>".$row['date']."</td>";
echo"<td>".$row['time']."</td>";
echo"<td>".$row['n1']."</td>";
echo"<td>".$row['n2']."</td>";
echo"<td>".$row['n3']."</td>";
echo"<td>".$row['n4']."</td>";
echo"<td>".$row['a1']."</td>";
echo"<td>".$row['a2']."</td>";
echo"<td>".$row['a3']."</td>";
echo"<td>".$row['a4']."</td>";
echo"<td>".$row['an1']."</td>";
echo"<td>".$row['an2']."</td>";
echo"<td>".$row['an3']."</td>";
echo"<td>".$row['an4']."</td></tr>";
}
echo"</table>";

}
?>
<?php
if(isset($_POST['confirm']))
{
$tot=0;$ct=0;
$cno=$_POST['cno'];
$sql ="SELECT * FROM booking WHERE number='".$cno."'";
$res=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($res))
{


}
echo"</table>";

}
?>
</div>
</div>

</body>
</html>

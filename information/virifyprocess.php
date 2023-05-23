<html>
<body>
<div class="container">

<div class="row">

<?php
include'adminheader.php';
include'connection.php';
?>
<h3><center><b>Verify Process</b></center></h3>
<div class="col-md-3"></div>
<div class="col-md-2">
</div>
</div>
<div class="row">

<?php

session_start();
$cname=$_SESSION['name'];
$sql="SELECT * FROM empreg";
$res=mysqli_query($con,$sql);
echo"<table class='table'><tr><th>cname</th><th>name</th><th>cid</th><th>address</th><th>domain</th><th>rdate</th><th>number</th><th>mail</th><th>salary</th><th>sslc</th><th>hsc</th><th>dc</th><th>ug</th><th>pg</th><th>dd</th><th>ac</th><th>eid</th><th>Status</th></tr>";
while($r=mysqli_fetch_array($res))
			{


echo"<tr><td>".$r['cname']."</td><td>".$r['name']."</td><td>".$r['cid']."</td><td>".$r['address']."</td><td>".$r['domain']."</td><td>".$r['rdate']."</td><td>".$r['number']."</td><td>".$r['mail']."</td><td>".$r['salary']."</td><td>".$r['sslc']."</td><td>".$r['hsc']."</td><td>".$r['dc']."</td><td>".$r['ug']."</td><td>".$r['pg']."</td><td>".$r['dd']."</td><td>".$r['ac']."</td><td>".$r['eid']."</td>
<td><button type='button' class='btn btn-success' id='".$r['id']."' onClick='approved(this.id)'>	&#10004;</button>	</td>				
<td><button type='button' class='btn btn-Danger' id='".$r['id']."' onClick='reject(this.id)'>X</button></td></tr>";

}
echo"</table>";
?>
<script>
		function approved(clicked_id)
		{
			window.location.href='approved.php?del_id='+clicked_id+'';
			return true;
		}
	</script>
	<script>
		function reject(clicked_id)
		{
			window.location.href='reject.php?del_id='+clicked_id+'';
			return true;
		}
	</script>
</div>
</div>
</body>
</html>

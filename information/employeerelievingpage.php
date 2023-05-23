<html>
<body>
<div class="container">
<div class="row">
<form method="post">
<div class="form-group">
<label for="">SSN NUMBER</label>
<?php
 include'header.php';
 include'connection.php';
$q = "SELECT * FROM empreg";
$re = mysql_query($con,$sql);  
?>
<input type="number" name="number" class="form-control">
<?php
} 

while ($ro = mysql_fetch_assoc($re));
  $ro = mysql_num_rows($re);
  if($ro > 0) {
      mysql_data_seek($re, 0);
	  $ro = mysql_fetch_assoc($re);
  }
?>
<script language="javascript">
$(document).ready(function()
{
	$("#number").change(function() 
	{
		$.ajax (
		{
			url:'number.php',
			data:'num='+$(this).val(),
			method:'post',
			datatype:'json',
			success: function(bill)
			{
				var id = bill.split(' ');
				$("#name").val(id[0]);
				$("#number").val(id[1]); 
			}
		}
		);
	});
});	
</script>
</div>
<div class="form-group">
<label for="">Name</label>
<input type="text" name="name" class="form-control">
</div>
<div class="form-group">
<label for="">Domain</label>
<input type="number" name="number" class="form-control">
</div>
<div class="form-group">
<label for="">Salary</label>
<input type="number" name="number" class="form-control">
</div>
<div class="form-group">
<label for="">Date Of Joining</label>
<input type="number" name="number" class="form-control">
</div>
</form>
</div>
</div>
</body>
</html>
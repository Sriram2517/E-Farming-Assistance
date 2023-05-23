
<html>
<head>
<style>
.container {
  position: relative;
  text-align:;
  color: white;
}
</style>
</head>
<body>
<div class="container">
<div class="row">
<?php
include'adminheader.php';
include'connection.php';
session_start();
$admin=$_SESSION['name'];
?>
<img src="images/bg4.jpg" class="img-thumbnail" style="width:100%;height:80%;">
<div id="" class="centered" style="margin-top:-25%; margin-left:10%;background-color:white;"><?php echo "WELCOME &nbsp;&nbsp;:&nbsp;&nbsp;" .$admin.""; ?></div>


</div>
</div>
</body>
</html>
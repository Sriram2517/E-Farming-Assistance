<?php require_once('conn.php'); ?>
<?php
if (isset($_POST["num"]))
{
	
	
	$res = mysql_query("Select * from empreg where cid=" . $_POST['num'] . "", $con);
	$rw = mysql_fetch_assoc($res);
	echo $rw['name'] . " ". $rw['number'];
	
}
?>
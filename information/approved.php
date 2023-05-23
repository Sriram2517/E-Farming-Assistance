<?php
	include('connection.php');
	$cancel="Apporved";
	$sql="UPDATE empreg SET status='".$cancel."' where id='".$_GET['del_id']."'";
	if ($con->query($sql)===TRUE)
	{		
		$sqlv="SELECT * FROM empreg where id='".$_GET['del_id']."'";
$resv=mysqli_query($con,$sqlv);
while($r=mysqli_fetch_array($resv))
	
	{
		$cname=$r['cname'];
		$name=$r['name'];
		$cid=$r['cid'];
		$address=$r['address'];
		$domain=$r['domain'];
		$rdate=$r['rdate'];
		$number=$r['number'];
		$mail=$r['mail'];
		$salary=$r['salary'];
		$sslc=$r['sslc'];
		$hsc=$r['hsc'];
		$dc=$r['dc'];
		$ug=$r['ug'];
		$pg=$r['pg'];
		$dd=$r['dd'];
		$ac=$r['ac'];
		$eid=$r['eid'];
	}
	
		$sqli="INSERT INTO approved(  cname,name,cid,address,domain,rdate,number,mail,salary,sslc,hsc,dc,ug,pg,dd,ac,eid,status)VALUES('".$cname."','".$name."','".$cid."','".$address."','".$domain."','".$rdate."','".$number."','".$mail."','".$salary."','".$sslc."','".$hsc."','".$dc."','".$ug."','".$pg."','".$dd."','".$ac."','".$eid."','".$cancel."')";
		$resulti=mysqli_query($con,$sqli);
	if($resulti)
	{
		$sqld="DELETE FROM empreg where id='".$_GET['del_id']."'";
		$resd=mysqli_query($con,$sqld);
		if($resd)
		{
		echo "<script>
		alert('Apporved');
		window.location.href='virifyprocess.php';
		</script>";
		}
		else
		{
			
		}
	}
	else
	{
		echo "<script>
		alert('error');
		window.location.href='virifyprocess.php';
		</script>";
	}
	}
	ELSE
	{
		ECHO"NOT OK".$con->error;
	}
?>


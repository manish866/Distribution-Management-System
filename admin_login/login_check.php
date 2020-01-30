<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		require("../db_connection.php");
		$ad_username=$_POST["ad_username"];
		$ad_password=$_POST["ad_password"];

		$sql=$conn->prepare("SELECT * FROM admin WHERE ad_username=?");
		$sql->bind_param("s",$ad_username);
		$sql->execute();

		$result=$sql->get_result();

		$count=$result->num_rows;
		if($count==1)
		{
			$row=$result->fetch_assoc();
			if($ad_password==$row["ad_password"])
			{
				header("location: ../admin/index.php");
			}
			else
			{
				echo "<script type='text/javascript'>
				alert('INVALID USERNAME AND PASSWORD');
				window.location='index.php';
				</script>";
			}
		}
		else
		{
			echo "<script type='text/javascript'>
			alert('INVALID USERNAME AND PASSWORD');
			window.location='index.php';
			</script>";
		}
	  ?>

</body>
</html>
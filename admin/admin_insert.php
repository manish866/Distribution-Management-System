<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include_once("../db_connection.php");
		$ad_name=$_POST["ad_name"];
		$ad_contact=$_POST["ad_contact"];
		$ad_address=$_POST["ad_address"];
		$ad_email=$_POST["ad_email"];
		$ad_username=$_POST["ad_username"];
		$ad_password=$_POST["ad_password"];
		$ad_date=$_POST["ad_date"];

		$sql=$conn->Prepare("INSERT INTO admin (ad_name,ad_contact,ad_address,ad_email,ad_username,ad_password,ad_date)VALUES(?,?,?,?,?,?,?)");

		$sql->bind_param("sisssss",$ad_name,$ad_contact,$ad_address,$ad_email,$ad_username,$ad_password,$ad_date);

		if ($sql->execute())
		 {
		 	echo "<script type='text/javascript'>
            alert('Record Inserted');
            window.location='admin_view.php';</script>";
			# code...
		}
		else
		{
			echo "<script type='text/Javascript'>alert('Record Not Inserted');</script>";
		}

	  ?>

</body>
</html>
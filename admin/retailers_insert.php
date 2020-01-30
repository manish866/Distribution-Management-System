<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include_once("../db_connection.php");
		$rt_enterprise_name=$_POST["rt_enterprise_name"];
        $rt_name=$_POST["rt_name"];
		$rt_contact=$_POST["rt_contact"];
		$rt_email=$_POST["rt_email"];
		$rt_address=$_POST["rt_address"];
		$rt_username=$_POST["rt_username"];
		$rt_password=$_POST["rt_password"];
        $rt_date=$_POST["rt_date"];

		$sql=$conn->Prepare("INSERT INTO retailers (rt_enterprise_name,rt_name,rt_contact,rt_email,rt_address,rt_username,rt_password,rt_date)VALUES(?,?,?,?,?,?,?,?)");

		$sql->bind_param("ssisssss",$rt_enterprise_name,$rt_name,$rt_contact,$rt_email,$rt_address,$rt_username,$rt_password,$rt_date);

		if ($sql->execute())
		 {
		 	echo "<script type='text/javascript'>
            alert('Record Inserted');
            window.location='retailers_view.php';</script>";
			# code...
		}
		else
		{
			echo "<script type='text/Javascript'>alert('Record Not Inserted');</script>";
		}

	  ?>

</body>
</html>
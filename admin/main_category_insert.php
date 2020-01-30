<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include_once("../db_connection.php");
		$mc_name=$_POST["mc_name"];
		$mc_date=$_POST["mc_date"];
		
		$sql=$conn->Prepare("INSERT INTO main_category  (mc_name,mc_date)VALUES(?,?)");

		$sql->bind_param("ss",$mc_name,$mc_date);

		if ($sql->execute())
		 {
		 	echo "<script type='text/javascript'>
            alert('Record Inserted');
            window.location='main_category_view.php';</script>";
			# code...
		}
		else
		{
			echo "<script type='text/Javascript'>alert('Record Not Inserted');</script>";
		}

	  ?>

</body>
</html>
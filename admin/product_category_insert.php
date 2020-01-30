<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include_once("../db_connection.php");
		$mc_id=$_POST["mc_id"];
		$pc_name=$_POST["pc_name"];
		
		$sql=$conn->Prepare("INSERT INTO product_category  (mc_id,pc_name)VALUES(?,?)");

		$sql->bind_param("ss",$mc_id,$pc_name);

		if ($sql->execute())
		 {
		 	echo "<script type='text/javascript'>
            alert('Record Inserted');
            window.location='product_category_view.php';</script>";
			# code...
		}
		else
		{
			echo "<script type='text/Javascript'>alert('Record Not Inserted');</script>";
		}

	  ?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include_once("../db_connection.php");
		$ec_min_amount=$_POST["ec_min_amount"];
		$ec_min_stock_qty=$_POST["ec_min_stock_qty"];
		$ec_date=$_POST["ec_date"];
		

		$sql=$conn->Prepare("INSERT INTO extra_charges  (ec_min_amount,ec_min_stock_qty	,ec_date)VALUES(?,?,?)");

		$sql->bind_param("iis",$ec_min_amount,$ec_min_stock_qty,$ec_date);

		if ($sql->execute())
		 {
		 	echo "<script type='text/javascript'>
            alert('Record Inserted');
            window.location='extra_charges_view.php';</script>";
			# code...
		}
		else
		{
			echo "<script type='text/Javascript'>alert('Record Not Inserted');</script>";
		}

	  ?>

</body>
</html>
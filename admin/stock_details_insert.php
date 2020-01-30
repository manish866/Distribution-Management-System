<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include_once("../db_connection.php");
		$pd_id=$_POST["pd_id"];
		$sd_avail_qty=$_POST["sd_avail_qty"];
		$sd_min_order_qty=$_POST["sd_min_order_qty"];
		$sd_mrp=$_POST["sd_mrp"];
		$sd_ptr=$_POST["sd_ptr"];
		$sd_ptr_discount=$_POST["sd_ptr_discount"];
		$sd_scheme_unit_price=$_POST["sd_scheme_unit_price"];
        $sd_total_amount=$_POST["sd_total_amount"];
        $sd_net_profit=$_POST["sd_net_profit"];
        $sd_status=$_POST["sd_status"];
        $sd_scheme_status=$_POST["sd_scheme_status"];

		$sql=$conn->Prepare("INSERT INTO stock_details (pd_id,sd_avail_qty,sd_min_order_qty,sd_mrp,sd_ptr,sd_ptr_discount,sd_scheme_unit_price,sd_total_amount,sd_net_profit,sd_status,sd_scheme_status)VALUES(?,?,?,?,?,?,?,?,?,?,?)");

		$sql->bind_param("iiiddidddss",$pd_id,$sd_avail_qty,$sd_min_order_qty,$sd_mrp,$sd_ptr,$sd_ptr_discount,$sd_scheme_unit_price,$sd_total_amount,$sd_net_profit,$sd_status,$sd_scheme_status);

		if ($sql->execute())
		 {
		 	echo "<script type='text/javascript'>
            alert('Record Inserted');
            window.location='stock_details_view.php';</script>";
			# code...
		}
		else
		{
			echo "<script type='text/Javascript'>alert('Record Not Inserted');</script>";
		}

	  ?>

</body>
</html>
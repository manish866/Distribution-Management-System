<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include_once("../db_connection.php");
		$pc_id=$_POST["pc_id"];
        $pd_name=$_POST["pd_name"];
		$pd_sku_code=$_POST["pd_sku_code"];
		$pd_tax_percent=$_POST["pd_tax_percent"];
		$pd_image=$_POST["pd_image"];
		$pd_description=$_POST["pd_description"];
		$pd_date=$_POST["pd_date"];

		$sql=$conn->Prepare("INSERT INTO product_details (pc_id,pd_name,pd_sku_code,pd_tax_percent,pd_image,pd_description,pd_date)VALUES(?,?,?,?,?,?,?)");

		$sql->bind_param("ississs",$pc_id,$pd_name,$pd_sku_code,$pd_tax_percent,$pd_image,$pd_description,$pd_date);

		if ($sql->execute())
		 {
		 	echo "<script type='text/javascript'>
            alert('Record Inserted');
            window.location='product_details_view.php';</script>";
			# code...
		}
		else
		{
			echo "<script type='text/Javascript'>alert('Record Not Inserted');</script>";
		}

	  ?>

</body>
</html>
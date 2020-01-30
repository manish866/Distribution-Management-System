<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<table border="1">
		    <tr>
		        <td colspan="13"><center>Stock Details</center></td>
		        <td> <a href="stock_details_form.php">New</a></td>
		    </tr>
			<tr>
				<td>SL.NO:</td>
				<td>Product ID:</td>
				<td>Stock Detail Availablity Aty:</td>
				<td>Stock Detail Minimum Order Qty:</td>
				<td>Stock Detail MRP:</td>
				<td>Stock Detail PTR:</td>
				<td>Stock Detail PTR Discount:</td>
				<td>Stock Detail Scheme Unit Price:</td>
				<td>Stock Detail Total Amount:</td>
				<td>Stock Detail Net Profit:</td>
				<td>Stock Detail Status:</td>
				<td>Stock Detail Scheme Status:</td>
				<td>Edit:</td>
				<td>Delete:</td>
			</tr>

			<?php
				include_once("../db_connection.php");
				$sno=1;
				$sql=$conn->Prepare ("SELECT * FROM stock_details");
				$sql->execute();
				$result=$sql->get_result();
				while ($row=$result->fetch_assoc()) 
				{
			  ?>
			  <tr>
			 		<td><?php echo $sno++;?></td>
			  		<td><?php echo $row["pd_id"];?></td>
			  		<td><?php echo $row["sd_avail_qty"];?></td>
			  		<td><?php echo $row["sd_min_order_qty"];?></td>
			  		<td><?php echo $row["sd_mrp"];?></td>
			  		<td><?php echo $row["sd_ptr"];?></td>
			  		<td><?php echo $row["sd_ptr_discount"];?></td>
			  		<td><?php echo $row["sd_scheme_unit_price"];?></td>
			  		<td><?php echo $row["sd_total_amount"];?></td>
			  		<td><?php echo $row["sd_net_profit"];?></td>
			  		<td><?php echo $row["sd_status"];?></td>
			  		<td><?php echo $row["sd_scheme_status"];?></td>
			  		
			  		<td>EDIT</td>
			  		<td><a href="stock_details_delete.php?id=
			  		<?php echo $row["sd_id"]; ?>">DELETE</a></td>
			  </tr>
			  <?php
			}
			?>
		</table>

</body>
</html>
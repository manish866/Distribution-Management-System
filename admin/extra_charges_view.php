<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<table border="1">
		    <tr>
		        <td colspan="5">Extra Charges</td>
		        <td><a href="extra_charges_form.php">New</a></td>
		    </tr>
			<tr>
				<td>SL.NO:</td>
				<td>Extra Charge Minimum Amount:</td>
				<td>Extra Charge Minimum Stock Quantity:</td>
				<td>Extra Charge Date:</td>
				<td>Edit:</td>
				<td>Delete:</td>
			</tr>

			<?php
				include_once("../db_connection.php");
				$sno=1;
				$sql=$conn->Prepare ("SELECT * FROM extra_charges");
				$sql->execute();
				$result=$sql->get_result();
				while ($row=$result->fetch_assoc()) 
				{
			  ?>
			  <tr>
			 		<td><?php echo $sno++;?></td>
			  		<td><?php echo $row["ec_min_amount"];?></td>
			  		<td><?php echo $row["ec_min_stock_qty"];?></td>
			  		<td><?php echo $row["ec_date"];?></td>
			  		<td>EDIT</td>
			  		<td><a href="extra_charges_delete.php?id=
			  		<?php echo $row["ec_id"]; ?>">DELETE</a></td>
			  </tr>
			  <?php
			}
			?>
		</table>

</body>
</html>
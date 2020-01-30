<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<table border="1">
		    <tr>
		        <td colspan="9"><center>Product Details</center></td>
		        <td><a href="product_details_form.php">New</a></td>
		    </tr>
			<tr>
				<td>SL.NO:</td>
				<td>Product Category id:</td>
				<td>Product Detail Name:</td>
				<td>Product Detail sku Code:</td>
				<td>Product Detail Tax Percent:</td>
				<td>Product Detail image:</td>
				<td>Product Detail Description:</td>
				<td>Product Detail Date:</td>
				<td>Edit:</td>
				<td>Delete:</td>
			</tr>

			<?php
				include_once("../db_connection.php");
				$sno=1;
				$sql=$conn->Prepare ("SELECT * FROM product_details");
				$sql->execute();
				$result=$sql->get_result();
				while ($row=$result->fetch_assoc()) 
				{
			  ?>
			  <tr>
			 		<td><?php echo $sno++;?></td>
			  		<td><?php echo $row["pc_id"];?></td>
			  		<td><?php echo $row["pd_name"];?></td>
			  		<td><?php echo $row["pd_sku_code"];?></td>
			  		<td><?php echo $row["pd_tax_percent"];?></td>
			  		<td><?php echo $row["pd_image"];?></td>
			  		<td><?php echo $row["pd_description"];?></td>
			  		<td><?php echo $row["pd_date"];?></td>
			  		<td>EDIT</td>
			  		<td><a href="product_details_delete.php?id=
			  		<?php echo $row["pd_id"]; ?>">DELETE</a></td>
			  </tr>
			  <?php
			}
			?>
		</table>

</body>
</html>
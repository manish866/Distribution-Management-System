<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<table border="1">
		    <tr>
		        <td colspan="10"><center>Retailers</center></td>
		        <td> <a href="retailers_form.php">New</a></td>
		    </tr>
			<tr>
				<td>SL.NO:</td>
				<td>Retailer Enterprise Name:</td>
				<td>Retailer Name:</td>
                <td>Retailer Contact:</td>
				<td>Retailer E-Mail:</td>
				<td>Retailer Address:</td>
				<td>Retailer UserName:</td>
				<td>Retailer Password:</td>
				<td>Retailer Date:</td>
				<td>Edit:</td>
				<td>Delete:</td>
			</tr>

			<?php
				include_once("../db_connection.php");
				$sno=1;
				$sql=$conn->Prepare ("SELECT * FROM retailers");
				$sql->execute();
				$result=$sql->get_result();
				while ($row=$result->fetch_assoc()) 
				{
			  ?>
			  <tr>
			 		<td><?php echo $sno++;?></td>
			  		<td><?php echo $row["rt_enterprise_name"];?></td>
			  		<td><?php echo $row["rt_name"];?></td>
			  		<td><?php echo $row["rt_contact"];?></td>
			  		<td><?php echo $row["rt_email"];?></td>
			  		<td><?php echo $row["rt_address"];?></td>
			  		<td><?php echo $row["rt_username"];?></td>
			  		<td><?php echo $row["rt_password"];?></td>
			  		<td><?php echo $row["rt_date"];?></td>
			  		<td>EDIT</td>
			  		<td><a href="retailers_delete.php?id=
			  		<?php echo $row["rt_id"]; ?>">DELETE</a></td>
			  </tr>
			  <?php
			}
			?>
		</table>

</body>
</html>
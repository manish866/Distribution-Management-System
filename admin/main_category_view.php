<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<table border="1">
		<tr>
		   <td colspan="4"><center> Main Category</center></td>
            <td> <a href="main_category_form.php">New</a></td>
		</tr>
			<tr>
				<td>SL.NO:</td>
				<td>Main Category Name:</td>
				<td>Main Category Date:</td>
				<td>Edit:</td>
				<td>Delete:</td>
			</tr>

			<?php
				include_once("../db_connection.php");
				$sno=1;
				$sql=$conn->Prepare ("SELECT * FROM main_category");
				$sql->execute();
				$result=$sql->get_result();
				while ($row=$result->fetch_assoc()) 
				{
			  ?>
			  <tr>
			 		<td><?php echo $sno++;?></td>
			  		<td><?php echo $row["mc_name"];?></td>
			  		<td><?php echo $row["mc_date"];?></td>
			  		<td>EDIT</td>
			  		<td><a href="main_category_delete.php?id=
			  		<?php echo $row["mc_id"]; ?>">DELETE</a></td>
			  </tr>
			  <?php
			}
			?>
		</table>

</body>
</html>
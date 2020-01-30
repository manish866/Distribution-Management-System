<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<form action="product_details_insert.php" method="POST">
			<table border="6">
				<tbody>
					<tr>
							<td><label>Product Category:</label></td>
							<td><input type="text" name="pc_id" id="pc_id"></td>
					</tr>
			
			
					<tr>
							<td><label>Product Detail Name:</label></td>
						<td><input type="text" name="pd_name" id="pd_name"></td>
					</tr>
					<tr>
			
						<td><label>Product Detail sku Code:</label></td>
						<td><input type="text" name="pd_sku_code" id="pd_sku_code"></td>
					</tr>
					<tr>
						<td><label>Product Detail Tax Percent:</label></td>
						<td><input type="text" name="pd_tax_percent" id="pd_tax_percent"></td>
					</tr>
					<tr>
						<td><label>Product Detail Image</label></td>
						<td><input type="text" name="pd_image" id="pd_image"></td>
					</tr>
					<tr>
						<td><label>Product Detail Description:</label></td>
						<td><input type="text" name="pd_description" id="pd_description"></td>
					</tr>
					<tr>
					    <td><label>Product Detail Date</label></td>
					    <td><input type="date" name="pd_date" id="pd_date"></td>
					</tr>
					<tr>
						<td colspan="1"><input type="submit" name=""></td>
						<td><input type="reset" name=""></td>
					</tr>

				</tbody>
			</table>
			
			
		</form>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$servername="localhost";
	$username="root";
	$password="";
	$db_name="prithvi_agency";


	$conn=new mysqli($servername,$username,$password,$db_name);
	if ($conn->connect_errno) {
		echo "Connection failed";die;
		# code...
	}
	  ?>

</body>
</html>
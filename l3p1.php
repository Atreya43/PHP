<!DOCTYPE html>
<html>
<head>
	<title>Simple Interest</title>
</head>
<body>
	<form action="" method="post">
		<table border="2">
		<tr>
			<td>
				Basic Amount
			</td>
			<td>
				<input type="text" name="BasicAmount">
			</td>
		</tr>
		<tr>
			<td>
				Period
			</td>
			<td>
				<input type="text" name="Period">
			</td>
		</tr>
		<tr>
			<td>
				Rate of Interest
			</td>
			<td>
				<input type="text" name="RateofInterest">
			</td>
		</tr>
	</table>
	<input type="submit"></input>
	</form>
</body>
</html>
<?php
	$basic = $_POST['BasicAmount'];
	$rate = $_POST['Period'];
	$RateofInterest = $_POST['RateofInterest'];
	$si = ($basic * $rate * $RateofInterest)/100;
	echo "$si";
?>
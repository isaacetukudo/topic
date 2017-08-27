<?php
	include_once('db_config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Stage 1 | Project 1</title>
	<style>
		table{
			border:1px solid;
			border-collapse: collapse;

		}
		td, th{
			padding: 4px 10px;
			border:1px solid;

		}
	</style>
</head>
<body>
<center>
	<h2>#STAGE1 PROJECT</h2>
	<table>
		<th>Name</th><th>Email</th>
	<?php 
		while ($result = mysqli_fetch_array($select)) {
			echo '<tr><td>'.$result['name'].'</td> <td>'.$result['email'].'</td></tr>';
		} 
	

	?>
	</table>
</center>
</body>
</html>


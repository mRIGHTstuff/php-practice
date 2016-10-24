<?php

$username = 'root';
$password = 'peekaboo';
$server = 'localhost';
$db = 'test';

$conn = new mysqli($server, $username, $password, $db);

if ($conn->connect_error) {
	echo mysqli_connect_error();
	exit;
}

$result = mysqli_query($conn, 'SELECT * FROM tasks'); 

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap 101 Template</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style>
		body {
			margin: 25px;
			color: ;
			background-color: ;
		}
	</style>
</head>
<body>
	<div class='container'>
		<div class='row'>
			<div class='col-md-6'>
				<h1>Here are your tasks</h1>
			</div>
		</div>
	</div>
</body>
<ul>
	<?php
	while ($row = $result->fetch_assoc()) {
		echo "<li>{$row['task']}</li>";
	}
	?>
</ul>


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

while ($row = $result->fetch_assoc()) {
	echo "{$row['task']} <br />";
}

?>


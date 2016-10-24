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

$rev = strrev($_POST['task']);

$sql = "INSERT INTO tasks (task) VALUES ('" . $rev . "')";

$conn->query($sql);
$conn->close();

// header("Location: http://localhost:8000/tasks.php");
// exit();

?>
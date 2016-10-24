<?php

function open_db() {
	$conn = new PDO("mysql:host=localhost;dbname=test", 'root', 'peekaboo');
	return $conn;
}

function close_db(&$conn) {
	$conn = null;
}

function get_all_tasks() {
	$conn = open_db();

	$stmt = $conn->prepare('SELECT * FROM tasks');

	$stmt->execute();

	$arr_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

	print_r($arr_rows);

	close_db($conn);
}

get_all_tasks();
?>
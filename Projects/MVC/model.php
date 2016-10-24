<?php
//these functions are called by various php files to execute operations.  It helps to keep them all in one place to keep things organized

//this function accesses the mysql database so information can be read or written

// The PHP Data Objects (PDO) extension defines a lightweight, consistent interface for accessing databases in PHP. Each database driver that implements the PDO interface can expose database-specific features as regular extension functions. Note that you cannot perform any database functions using the PDO extension by itself; you must use a database-specific PDO driver to access a database server.

//PDO provides a data-access abstraction layer, which means that, regardless of which database you're using, you use the same functions to issue queries and fetch data. PDO does not provide a database abstraction; it doesn't rewrite SQL or emulate missing features. You should use a full-blown abstraction layer if you need that facility. 
function open_db() {
	$conn = new PDO("mysql:host=localhost;dbname=test", 'root', 'peekaboo');
	return $conn;
}

//this closes the mysql database, the database should always be closed at the end of an operation because (ask McConnell)
function close_db(&$conn) {
	$conn = null;
}

//this function accesses the entire mysql database and allows something to read it
function get_all_tasks() {
	$conn = open_db();

	$stmt = $conn->prepare('SELECT * FROM tasks');

	$stmt->execute();

	$arr_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

	close_db($conn);
	return $arr_rows;

}

//this function accesses a particular item from the table of the mysql database by its id
function get_task_by_id($id) {

	$conn = open_db();
	$stmt = $conn->prepare("SELECT * FROM tasks WHERE id = ?");

	$stmt->execute( array($id) );

	$row = $stmt->fetch(PDO::FETCH_ASSOC);

	close_db($conn);
	return $row;
}

//this function creates a task in the mysql database
function insert_task($arr_task) {

	$conn = open_db();
	$sql = "INSERT INTO tasks (title, description) VALUES (?, ?)";

	$stmt = $conn->prepare($sql);

	$stmt->execute( $arr_task );
	$newId = $conn->lastInsertId();

	close_db($conn);
	return $newId;
}

?>
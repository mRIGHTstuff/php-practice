<?php $title = 'Insert Task' ?>

<?php 

//This function will turn output buffering on. While output buffering is active no output is sent from the script (other than headers), instead the output is stored in an internal buffer
ob_start() 
?>

<h1>Insert New Task</h1>

<!--the html post method takes some user input and enters it into the buffer, note there is only one submit button for both inputs-->
<u1>
	<form method='post' action='/submit.php'>
		<label>Title</label>
		<input type='text' name='title' />
		<label>Description</label>
		<input type='text' name='description' />
		<input type='submit'>
	</form>

<?php 

//Gets the current buffer contents and delete current output buffer
$content = ob_get_clean() 
?>

<?php 

//Files are included based on the file path given or, if none is given, the include_path specified. If the file isn't found in the include_path, include will finally check in the calling script's own directory and the current working directory before failing. The include construct will emit a warning if it cannot find a file; this is different behavior from require, which will emit a fatal error
include 'layout.php' 
?>
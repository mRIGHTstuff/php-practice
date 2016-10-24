<?php $title = 'List of Tasks' ?>

<?php 

//This function will turn output buffering on. While output buffering is active no output is sent from the script (other than headers), instead the output is stored in an internal buffer.
ob_start() 

?>
<h1>Lists of Tasks</h1>
<ul>
	<?php foreach ($tasks as $task): ?>
		<li>
			<a href="/show.php?id=<?php echo $task['id'] ?>">
				<?php echo $task['title'] ?>
			</a>
		</li>
	<?php endforeach ?>
</ul>
<?php 

//Returns the contents of the output buffer and end output buffering. If output buffering isn't active then FALSE is returned.
$content = ob_get_clean() 

?>

<?php include 'layout.php' ?>
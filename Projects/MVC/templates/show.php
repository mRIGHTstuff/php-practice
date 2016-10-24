<?php $title = $task['title'] ?>

<?php ob_start() ?>
	<h1><?php echo $task['title'] ?></h1>

	<div class="body">
		<?php echo $task['description'] ?>
	</div>

<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
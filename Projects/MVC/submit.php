<?php

//The require_once statement is identical to require except PHP will check if the file has already been included, and if so, not include (require) it again
require_once 'model.php';

//the user submitted values are entered through $_POST and entered into an array called $array
$array = array($_POST['title'], $_POST['description']);

//since it is already an array, and insert_task function takes an array as a value and we convert it to a variable
$id = insert_task($array);

//when we call the variable $id, we get the value that the function returns
echo "New task added with ID $id";

?>

<a href='index.php'>Return</a>
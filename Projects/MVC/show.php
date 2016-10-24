<?php
//The require_once statement is identical to require except PHP will check if the file has already been included, and if so, not include (require) it again
require_once 'model.php';

//this variable is called from model.php, that php file is not referenced after this
$task = get_task_by_id($_GET['id']);

//require is identical to include except upon failure it will also produce a fatal E_COMPILE_ERROR level error. In other words, it will halt the script whereas include only emits a warning (E_WARNING) which allows the script to continue
require 'templates/show.php';

?>
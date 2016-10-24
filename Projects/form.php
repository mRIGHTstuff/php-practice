<?php

if ($_POST['noun'] == mike) {
	echo "This {$_POST['adjective']} {$_POST['noun']} {$_POST['verb']} is too dope!";
} 

Else if ($_POST['noun'] == McConnell) {
	echo "This {$_POST['adjective']} {$_POST['noun']} {$_POST['verb']} is too meaty boooy!";
}

else {
	echo "This {$_POST['adjective']} {$_POST['noun']} {$_POST['verb']} is all cheese...";
}

?>
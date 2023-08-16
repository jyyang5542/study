<?php
	session_start();
	if (isset($_SESSION['admin_ID'])) {header('location: /');}
	else {header('location: /admin/login.php');}
?>

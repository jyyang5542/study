<?php
	### HEADER ###
	include "./_inc/top.php";

	### CONTENTS ###
	switch($_GET["page"]) {
		default :
			include "./main.php";
			break;
	}

	### FOOTER ###
	include "./_inc/bottom.php";
	?>
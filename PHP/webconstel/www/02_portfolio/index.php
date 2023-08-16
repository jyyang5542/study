<?php
	switch($_GET['mod']) {
		case "write" :
			include "./02_portfolio/write.php";
			break;
		case "list" :
			include "./02_portfolio/list.php";
			break;
		case "view" :
			include "./02_portfolio/view.php";
			break;
		case "delete" :
			include "./02_portfolio/delete.php";
			break;
		default :
			include "./02_portfolio/list.php";
			break;
	}
?>
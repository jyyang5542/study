<?php include "./_layouts/_inc/top.php";?>

<?php
	switch($_GET['menu']) {
		case "profile" :
			include "./01_about/about.php";
			break;
		case "portfolio" :
			include "./02_portfolio/index.php";
			break;
		case "contact" :
			include "./03_contact/contact.php";
			break;
		case "sitemap" :
			include "./04_sitemap/sitemap.php";
			break;
		case "study" :
			include "./05_study/index.php";
			break;
		case "sources" :
			include "./07_sources/index.php";
			break;
		case "citation" :
			include "./06_citation/web-constel.php";
			break;
		default :
			include "./home.php";
			break;
	}
?>

<?php include "./_layouts/_inc/bottom.php";?>
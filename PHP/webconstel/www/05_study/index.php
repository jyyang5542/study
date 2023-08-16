<div class="wrap">
	<?php if (isset($_SESSION['admin_ID'])) {?>
	<h2><b><span>S</span>TUDY</b></h2>

	<?php
		include "./05_study/_inc.php";

		switch($_GET['category']) {
		case "html" :
			include "./05_study/html/index.php";
			break;
		case "php" :
			include "./05_study/php/index.php";
			break;
		case "css" :
			include "./05_study/css/index.php";
			break;
		case "javascript" :
			include "./05_study/javascript/index.php";
			break;
		case "jquery" :
			include "./05_study/jquery/index.php";
			break;
		case "react" :
			include "./05_study/react/index.php";
			break;
		case "c" :
			include "./05_study/c/index.php";
			break;
		default :
			include "./05_study/html/index.php";
			break;
	}
	?>

	<style type="text/css">
	#content .wrap h3 {letter-spacing:0;}
	#content .wrap h3 span::after {content:"\00a0";}
	ul.list {margin-top:30px;}
	ul.list li {
	width:calc(100% - 20px);
	margin-left:20px;
	line-height:1.6;
	list-style-type:decimal;
	list-style-position:outside;
	font-size:18px;
	color:#333;
	}
	ul.list li:not(:last-of-type) {margin-bottom:20px;}
	ul.list li b {color:#333;}
	ul.list li a {color:#777; text-decoration:none !important;}
	ul.list li a:hover {color:#547DBF; font-weight:bold;}
	</style>


	<?php } else {?>
	<script type="text/javascript">
	alert("열람 권한이 없습니다.");
	window.location.href="/";
	</script>
	<?php }?>
</div>
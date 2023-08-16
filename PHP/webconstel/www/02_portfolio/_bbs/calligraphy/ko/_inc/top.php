<!doctype html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta name="Generator" content="EditPlus®">
<meta name="Author" content="Yang, Jung Yeon (+82)10-3437-5542">
<meta name="Keywords" content="callygraphy, Calligraphy, random, quoute, qoutes, generator">
<meta name="Description" content="Generates Random Quotes for Calligraphy">
<link rel="stylesheet" type="text/css" href="<?php echo $url;?>/_css/style.css" />
<title>캘리매니아 - 캘리그라피를 위한 무작위 단어ㆍ문장 생성기</title>
</head>
<body>
<?php
	session_start();
?>
<!--
<?php if (isset($_SESSION['admin_ID'])) {?>
<?php } else {?>
<?php }?>
-->

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<div id="gnb" align="right">
	<table cellpadding=0 cellspacing=0 border=0>
		<tr>
			<td><a href="<?php echo $url?>/ko" class="on">한국어</a></td>
			<td><a href="<?php echo $url?>/en">English</a></td>
		</tr>
	</table>
</div>

<div id="header" align="center">
	<h1><a href="./index.php"><img src="<?php echo $url;?>/logo_ko.png" alt="캘리매니아 - 캘리그라피를 위한 무작위 단어ㆍ문장 생성기" /></a></h1>
</div>

<script type="text/javascript">
$(document).ready(function() {});
</script>
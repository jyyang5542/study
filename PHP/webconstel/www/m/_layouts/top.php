<!doctype html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta name="Generator" content="EditPlus®">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
<title>Web Constel</title>
<link rel="stylesheet" type="text/css" href="/_layouts/css/mobile.css" /><link href="https://fonts.googleapis.com/css?family=Mukta" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>
<body>
<?php session_start();?>
<img src="/_layouts/images/logo.png" style="display:none;" />

<div id="header">
	<a class="menu"><img src="/m/menu.png" width="30" alt="menu" /></a>
	<h1><a href="/m"><span>WEB</span> CONSTEL</a></h1>
	<a href="tel:+821034375542" class="tel"><img src="/m/phone.png" width="30" alt="phone" /></a>
</div>

<?php include "./_layouts/side.php";?>

<script type="text/javascript">
$(document).ready(function() {
	$('.menu').click(function() {
		$('#side').show();
	});
	$('#side .close').click(function() {
		$('#side').hide();
	});
});
</script>

<script type="text/javascript">
function resizeIframe(obj) {
	obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT']."/_layouts/_inc/top.php";?>

<!--### 코드로 표현하는 플러그인 ###-->
<link rel="stylesheet" type="text/css" href="/_layouts/js/highlight/styles/default.css" />
<script type="text/javascript" src="/_layouts/js/highlight/highlight.pack.js"></script>
<script type="text/javascript" src="/_layouts/js/highlight/highlightjs-line-numbers.min.js"></script>
<script>
	hljs.initHighlightingOnLoad();
	hljs.initLineNumbersOnLoad();
</script>

<div class="wrap">
	<?php if (isset($_SESSION['admin_ID'])) {?>
	<h2><b><span>S</span>TUDY / jQuery</b></h2>
	<h4>Slick 슬라이더</h4>
	<br /><br /><br />

	<div id="intro">
	- [소스 주소] <a href="http://kenwheeler.github.io/slick/" target="_blank">http://kenwheeler.github.io/slick/</a>
	</div>

	<link rel="stylesheet" type="text/css" href="./slick.css">
	<link rel="stylesheet" type="text/css" href="./slick-theme.css">
	<script type="text/javascript" src="./slick.min.js"></script>

	<h3><span>\</span> <b>R</b>ESULT</h3>
	<br />
	<div id="result">
		<div><p class="slick" id="slick1">Slide #1</p></div>
		<div><p class="slick" id="slick2">Slide #2</p></div>
		<div><p class="slick" id="slick3">Slide #3</p></div>
	</div>

	<script type="text/javascript">
	$(function() {
		$('#result').slick({
			dots: true,
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			adaptiveHeight: true,
			autoplay: true,
			autoplaySpeed:2000
		});
	});
	</script>

	<h3><span>\</span> <b>C</b>ODE</h3>
	<div class="code">
		<pre>
			<code><?php echo htmlspecialchars(file_get_contents('./code.inc'));?></code>
		</pre>
	</div>
	<br /><br /><br />

	<style type="text/css">
	.wrap {font-size:15px;}
	#content .wrap h3 {letter-spacing:0;}
	#content .wrap h3 span::after {content:"\00a0";}
	.ex {width:100%; border:1px solid #ddd;}
	.ex dt,
	.ex dd {padding:6px 10px; line-height:1.8;}
	.ex dt {font-weight:bold; background:#eee;}
	.ex dd {}
	.ex dd b {color:#547DBF;}
	#intro b,
	#result b {color:#547DBF;}
	#result {text-align:center;}
	.slick {
		width:100%; 
		height:300px; 
		text-align:center; 
		line-height:300px;
		color:white;
		font-size:60px;
	}
	#slick1 {background:#547DBF;}
	#slick2 {background:#93C86E;}
	#slick3 {background:#EFA5A2;}
	</style>

	<?php } else {?>
	<script type="text/javascript">
	alert("열람 권한이 없습니다.");
	window.location.href="/";
	</script>
	<?php }?>
	</div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT']."/_layouts/_inc/bottom.php";?>
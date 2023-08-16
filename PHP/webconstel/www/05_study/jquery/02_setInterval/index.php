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
	<h4>.setInterval()</h4>
	<br /><br /><br />

	<div id="intro">
	* setInterval()을 활용하여 페이드인/페이드아웃 슬라이드를 만드는 샘플<br />
	* clearInterval()을 통해 setInterval()을 정지시킬 수 있다.
	</div>

	<h3><span>\</span> <b>R</b>ESULT</h3>
	<div id="result">
		<div id="slide">
			<div class="slide" id="slide1" style="display:block;">Slide #1</div>
			<div class="slide" id="slide2">Slide #2</div>
			<div class="slide" id="slide3">Slide #3</div>
		</div>
		<br />
		<button class="clear">clearInterval()</button>
	</div>

	<script type="text/javascript">
	$(function() {
		var n = 1;
		var maxLeng = $('#slide .slide').length;

		rolling = setInterval(function() {
			n++;
			$('#slide .slide').fadeOut();
			$('#slide #slide'+n).fadeIn();

			if (n >= maxLeng) {n = 0;}
		}, 3000);

		$('.clear').click(function() {
			clearInterval(rolling);
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
	#slide {position:relative; width:100%; height:300px;}
	#slide .slide {
	position:absolute;
	display:none;
	width:100%; 
	height:300px; 
	top:0;
	left:0;
	line-height:300px; 
	text-align:center; 
	font-size:60px;
	color:white;
	}
	#slide #slide1 {background:#547DBF;}
	#slide #slide2 {background:#93C86E;}
	#slide #slide3 {background:#EFA5A2;}
	button.clear {display:block; width:250px; height:40px; margin:0 auto; font-size:15px;}
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
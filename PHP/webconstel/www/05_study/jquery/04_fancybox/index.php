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
	<h4>Fancybox 갤러리</h4>
	<br /><br /><br />

	<div id="intro">
	- [소스 주소] <a href="http://fancybox.net/" target="_blank">http://fancybox.net/</a><br />
	<br />
	* 각 썸네일을 클릭하면 화면 내에서 원본 이미지를 보여준다.<br />
	* data-fancybox 속성은 한 페이지에 여러개의 갤러리가 들어갈 때, 갤러리 그룹을 만드는 역할을 한다.
	</div>

	<h3><span>\</span> <b>R</b>ESULT</h3>
	<br />
	<div id="result">
		<a data-fancybox="gallery" href="./original1.jpg" class="sample">
			<img src="./thum1.jpg" title="샘플1"></a>
		<a data-fancybox="gallery" href="./original2.jpg" class="sample">
			<img src="./thum2.jpg" title="샘플1"></a>
		<a data-fancybox="gallery" href="./original3.jpg" class="sample">
			<img src="./thum3.jpg" title="샘플1"></a>
	</div>

	<link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>

	<script type="text/javascript">
	$(function() {
		$('.sample').fancybox();
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
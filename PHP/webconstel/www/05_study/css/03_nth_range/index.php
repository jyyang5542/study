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
	<h2><b><span>S</span>TUDY / CSS</b></h2>
	<h4>nth-of-type 선택범위</h4>
	<br /><br /><br />

	<div id="intro">
		- [소스 주소] <a href="https://gist.github.com/rondevera/167627" target="_blank">GitHubGist</a><br />
		<br />
		<dl class="ex">
			<dt><b>p.sample span</b>:nth-of-type(n+3):nth-of-type(-n+5)</dt>
			<dd>
				<p class="sample">
					<?php for($i=1; $i<=10; $i++) {echo '<span>'.$i.'</span>';}?>
				</p>
			</dd>
		</dl>
	</div>

	<h3><span>\</span> <b>C</b>ODE</h3>
	<div class="code">
		<pre>
		<code class="language-css">	.sample span:nth-of-type(n+3):nth-of-type(-n+5) {
		color:white;
		background:#547DBF;
		border:1px solid #547DBF;
	}
		</code>
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
	.sample {text-align:center;}
	.sample span {
		display:inline-block;
		width:40px;
		height:30px;
		line-height:30px;
		text-align:center;
		border:1px solid #eee;
	}
	.sample span:nth-of-type(n+3):nth-of-type(-n+5) {
		color:white;
		background:#547DBF;
		border:1px solid #547DBF;
	}
	.sample span:not(:last-of-type) {margin-right:4px;}
	#intro b,
	#result b {color:#547DBF;}
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
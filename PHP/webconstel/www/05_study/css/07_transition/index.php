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
	<h4>CSS 애니메이션 2 (수동 애니메이션)</h4>

	<h3><span>\</span> <b>C</b>ODE</h3>
	<div class="code">
		<pre>
		<code class="language-css">	#check {width:18px; height:18px; vertical-align:top;}
	#box {
		display:inline-block;
		width:50px;
		height:50px;
		text-align:center;
		line-height:50px;
		font-size:16px;
		font-weight:bold;
		color:white;
		background:orange;
		transition:all ease 2s 0s;
		/*
		transition: property timing-function duration delay | initial | inherit;
		transition-property : none | all | property | initial | inherit;
		transition-timing-function : ease | linear | ease-in | ease-out | ease-in-out | step-start | step-end | steps( n, start|end ) | cubic-bezier( n, n, n, n ) | initial | inherit;
		transition-duration: transition-duration: time| initial | inherit;
		transition-delay: transition-duration: time| initial | inherit;
		*/
	}
	#check:checked ~ #box {
		width:350px;
		height:350px;
		line-height:350px;
		font-size:32px;
		background:red;
	}
		</code>
		</pre>
	</div>

	<h3><span>\</span> <b>R</b>ESULT</h3>
	<div id="result">
		<br />
		<input type="checkbox" id="check" />
		<div id="box">Box</div>
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
	#result b {color:#547DBF;}
	#check {width:18px; height:18px; vertical-align:top;}
	#box {
		display:inline-block;
		width:50px;
		height:50px;
		text-align:center;
		line-height:50px;
		font-size:16px;
		font-weight:bold;
		color:white;
		background:orange;
		transition:all ease 2s 0s;
	}
	#check:checked ~ #box {
		width:350px;
		height:350px;
		line-height:350px;
		font-size:32px;
		background:red;
	}
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
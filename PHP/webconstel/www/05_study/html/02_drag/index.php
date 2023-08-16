<?php
	include $_SERVER['DOCUMENT_ROOT']."/_layouts/_inc/top.php";
?>

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
	<h2><b><span>S</span>TUDY / HTML</b></h2>
	<h4>드래그 및 우클릭 금지하기</h4>
	<br /><br /><br />

	<div id="intro">
	<dl class="ex">
		<dt>&lt;body&gt; 태그 안에 속성 부여</dt>
		<dd>
			&lt;body <b>oncontextmenu</b>="return false" <b>ondragstart</b>="return false" <b>onselectstart</b>="return false"&gt;<br />
		</dd>
		<dd>
			* <b>oncontextmenu</b> = 마우스 오른쪽 버튼 차단여부<br />
			* <b>ondragstart</b> = 드래그 차단여부<br />
			* <b>onselectstart</b> = 텍스트 선택 차단여부<br />
		</dd>
	</dl>
	</div>

	<h3><span>\</span> <b>C</b>ODE</h3>
	<div class="code">
		<pre>
		<code class="language-html">	&lt;body oncontextmenu="return false" ondragstart="return false" onselectstart="return false"&gt;
	콘텐츠 어쩌구 저쩌구
	&lt;/body&gt;
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
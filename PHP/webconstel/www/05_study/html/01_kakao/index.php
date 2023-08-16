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
	<h2><b><span>S</span>TUDY / HTML</b></h2>
	<h4>Kakao Talk 링크 공유시</h4>
	<br /><br /><br />

	<div id="intro">
	- [소스 주소] <a href="https://brunch.co.kr/@jiyeonsongofnt/11" target="_blank">https://brunch.co.kr/@jiyeonsongofnt/11</a><br />
	<br />
	<dl class="ex">
		<dt>Open Graph 제목</dt>
		<dd>&lt;meta property="<b>og:title</b>" content="링크 제목" /&gt;</dd>
		<dt>Open Graph 설명</dt>
		<dd>&lt;meta property="<b>og:description</b>" content="링크된 페이지에 대한 설명" /&gt;</dd>
		<dt>Open Graph 이미지</dt>
		<dd>&lt;meta property="<b>og:image</b>" content="내 이미지 경로" /&gt;</dd>
	</dl>
	</div>

	<h3><span>\</span> <b>C</b>ODE</h3>
	<div class="code">
		<pre>
			<code class="language-html">	&lt;!doctype=html&gt;
	&lt;html lang="ko"&gt;
	&lt;head&gt;
		&lt;!--// Kakao Talk 관련 meta //--&gt;
		&lt;meta property="og:title" content="링크 제목" /&gt;
		&lt;meta property="og:description" content="링크된 페이지에 대한 설명" /&gt;
		&lt;meta property="og:image" content="내 이미지 경로" /&gt;
	&lt;/head&gt;
	&lt;body&gt;
		CONTENTS
	&lt;/body&gt;
	&lt;/html&gt;
			</code> <!--// html -->
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
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
	<h2><b><span>S</span>TUDY / PHP</b></h2>
	<h4>URL 내 문자열 포함여부 판별하기</h4>
	<br /><br /><br />

	<div id="intro">* PHP로 현재 URL에 자신이 찾고자하는 문자열이 포함되어있는지 확인할 수 있다.</div>

	<h3><span>\</span> <b>C</b>ODE</h3>
	<div class="code">
		<pre>
		<code class="language-php">	&lt;!--// PHP 코드 //--&gt;
	&lt;?php
		$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
		if (strpos($url, 'string') !== false) {
	?&gt;
	현재 URL이 내가 찾는 단어 &lt;b&gt;string&lt;/b&gt;를 포함합니다.
	&lt;?php } else { ?&gt;
	현재 URL이 내가 찾는 단어 &lt;b&gt;string&lt;/b&gt;를 포함하지 않습니다.
	&lt;?php } ?&gt;
	 
	/*
	&lt;?php
		// url에 특정 단어를 포함하는 경우 PHP
		$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
		if (strpos($url, '내 단어') !== false) {echo "내 단어 있음";}
		else {echo "내 단어 없음";}
	?&gt;
	*/
		</code>
		</pre>
	</div>

	<h3><span>\</span> <b>R</b>ESULT</h3>
	<div id="result">
		<?php
			$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
		?>
		<dl class="ex">
			<dt>URL 안에서 "string" 검색</dt>
			<dd>
			<?php
				if (strpos($url, 'string') !== false) {echo "\"string\" 있음";}
				else {echo "\"string\" 없음";}
			?>
			</dd>
			<dt>URL 안에서 "STRING" 검색</dt>
			<dd>
			<?php
				if (strpos($url, 'STRING') !== false) {echo "\"STRING\" 있음";}
				else {echo "\"STRING\" 없음";}
			?>
			</dd>
		</dl>
	</div>
	<br /><br /><br />

	<style type="text/css">
	.wrap {font-size:15px;}
	#content .wrap h3 {letter-spacing:0;}
	#content .wrap h3 span::after {content:"\00a0";}
	.ex {margin-top:10px; width:100%; border:1px solid #ddd;}
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
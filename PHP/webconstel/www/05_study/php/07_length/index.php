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
	<h4>텍스트 길이 제한하기</h4>
	<br /><br /><br />

	<div id="intro">
		- [소스 주소] <a href="http://php.net/manual/fr/function.substr.php" target="_blank">
			http://php.net/manual/fr/function.substr.php</a>
	</div>

	<h3><span>\</span> <b>C</b>ODE</h3>
	<div class="code">
		<pre>
		<code class="language-php">	&lt;php
		$mystring = "".
		"제1항의 해임건의는 국회재적의원 3분의 1 이상의 발의에 의하여 ".
		"국회재적의원 과반수의 찬성이 있어야 한다.";

		$substr = mb_substr($mystring, 0, 40, "UTF-8");
	&gt;
		</code>
		</pre>
	</div>

	<h3><span>\</span> <b>R</b>ESULT</h3>
	<div id="result"></div>
	<?php
		$mystring = "".
		"제1항의 해임건의는 국회재적의원 3분의 1 이상의 발의에 의하여 ".
		"국회재적의원 과반수의 찬성이 있어야 한다.";
		$substr = mb_substr($mystring, 0, 40, "UTF-8");
		echo '<p style="padding:15px;">'.$substr.'</p>';
	?>
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
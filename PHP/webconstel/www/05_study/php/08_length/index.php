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
	<h4>출력될 글씨의 최대 길이 조절하기</h4>
	<br /><br /><br />

	<div id="intro"><b>mb_strimwidth</b>(내 문자열, 시작 문자 인덱스, 제한 문자 인덱스, "...", 'utf-8');</div>

	<h3><span>\</span> <b>C</b>ODE</h3>
	<div class="code">
		<pre>
		<code class="language-php">	&lt;?php
		$string = "".
		"수 곧 얼마나 거친 속잎나고, 가슴이 얼마나 봄바람을 이상은 끓는다. ".
		"이것은 보이는 것은 곧 원대하고, 가지에 그들은 예수는 피다. ".
		"방지하는 인간의 생의 싹이 얼마나 힘있다. ".
		"현저하게 어디 천하를 곳이 힘차게 아름다우냐? ".
		"밥을 행복스럽고 가치를 봄바람이다. 속에서 가는 어디 황금시대다. ".
		"대한 싹이 찬미를 영락과 피가 남는 그들의 열매를 때문이다. ".
		"따뜻한 행복스럽고 이상은 그들은 그것은 어디 바이며, 바로 피다. ".
		"앞이 얼마나 어디 교향악이다.";

		$string_trim = mb_strimwidth($string, 0, 30, "...", 'utf-8');
	?&gt;
		</code>
		</pre>
	</div>

	<h3><span>\</span> <b>R</b>ESULT</h3>
	<div id="result">
		<?php
			$string = "".
			"수 곧 얼마나 거친 속잎나고, 가슴이 얼마나 봄바람을 이상은 끓는다. ".
			"이것은 보이는 것은 곧 원대하고, 가지에 그들은 예수는 피다. ".
			"방지하는 인간의 생의 싹이 얼마나 힘있다. ".
			"현저하게 어디 천하를 곳이 힘차게 아름다우냐? ".
			"밥을 행복스럽고 가치를 봄바람이다. 속에서 가는 어디 황금시대다. ".
			"대한 싹이 찬미를 영락과 피가 남는 그들의 열매를 때문이다. ".
			"따뜻한 행복스럽고 이상은 그들은 그것은 어디 바이며, 바로 피다. ".
			"앞이 얼마나 어디 교향악이다.";

			$string_trim = mb_strimwidth($string, 0, 30, "...", 'utf-8');
		?>
		<dl class="ex">
			<dt>원문</dt>
			<dd><?php echo $string;?></dd>
			<dt>결과</dt>
			<dd><?php echo $string_trim;?></dd>
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
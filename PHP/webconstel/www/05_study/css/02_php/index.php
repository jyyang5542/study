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
	<h4>PHP 스타일시트 만들기</h4>
	<br /><br /><br />

	<div id="intro">
		- [소스 주소] <a href="http://jafty.com/blog/how-to-create-a-css-stylesheet-with-php" target="_blank">
			http://jafty.com/blog/how-to-create-a-css-stylesheet-with-php</a><br />
		<br />
		<dl class="ex">
			<dt>PHP 스타일시트의 장점</dt>
			<dd>
				1. 홈페이지 내에서 반복되는 특정한 컬러코드(예시: #000000)나 이미지 소스(예시: "/image.jpg") 등을 변수로 지정하여 해당 변수만 변경했을 때 해당되는 모든 값이 한번에 바뀐다.
			</dd>
			<dt>PHP 스타일시트의 단점</dt>
			<dd>
				1. 코드를 수정할 때 EditPlus 프로그램을 예로 들 경우, 해당 PHP파일 내에서는 CSS코드가 다양한 색상으로 눈에 띄게끔 표현되지 않는다.<br />
				<br />
				2. if문, for문 등 다양한 PHP의 기능을 사용할 수 있는 것은 아니다. 오로지 변수로 지정된 값을 echo로 불러오는 작업만 수행한다.
			</dd>
		</dl>
	</div>

	<h3><span>\</span> <b>C</b>ODE - HTML</h3>
	<div class="code">
		<pre>
		<code class="language-html">	&lt;!DOCTYPE html&gt;
	&lt;html&gt;
	&lt;head&gt;
		&lt;title&gt;PHP 스타일시트&lt;/title&gt;
		&lt;link rel="stylesheet" type="text/css" href="style.php"&gt; // 스타일시트 불러오기
	&lt;/head&gt;
	&lt;body&gt;
		&lt;div id="box"&gt;
		&lt;h1&gt;H1 Header&lt;/h1&gt;
		&lt;p&gt;This is text inside a p tag which is inside of the box div...&lt;/p&gt;
		&lt;/div&gt;
	&lt;/body&gt;
	&lt;/html&gt;
		</code>
		</pre>
	</div>

	<h3><span>\</span> <b>C</b>ODE - CSS</h3>
	<div class="code">
		<pre>
		<code class="language-css">	&lt;?php
		header("Content-type: text/css; charset: UTF-8");
		 
		/* Settings */
		$color1 = "#DBF5F3";
		$color2 = "#FFFFFF";
		$color3 = "#000000";
	?&gt;
	 
	body {
		background-color: &lt;?php echo $color;?&gt;;
	}
	#box {
		position:absolute;
		background-color:&lt;?php echo $color;?&gt;;
		top:100px;
		width:400px;
		height 300px;
		left:60px;
		line-height:18px;
		padding-left:15px;
		padding-right:12px;
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
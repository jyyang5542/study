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
	<h4>SASS / SCSS의 활용</h4>
	<br /><br /><br />

	<div id="intro">* CSS를 웹프로그램처럼 사용할 수 있게 도와주는 전처리기(변수, 조건문, 반복문 등의 활용이 가능해진다.)</div>
	<br />

	<dl class="ex">
		<dt>SASS / SCSS 참고자료</dt>
		<dd>
			<ul>
				<li>[외부링크] <a href="https://poiemaweb.com/sass-basics" target="_blank">Sass의 소개, 설치와 간단한 명령어 사용법</a></li>
				<li>[외부링크] <a href="http://wit.nts-corp.com/2015/01/09/2936" target="_blank">Sass(CSS Preprocessor) 기초</a></li>
				<li>[외부링크] <a href="https://www.sassmeister.com/" target="_blank">온라인 SASS 컴파일러</a></li>
			</ul>
		</dd>
	</dl>

	<h3><span>\</span> <b>C</b>ODE</h3>
	<div class="code">
		<pre><code class="language-css"><?php include "./style.sass";?></code></pre>
	</div>

	<h3><span>\</span> <b>R</b>ESULT</h3>
	<div id="result">
		<div class="code">
			<pre><code class="language-css"><?php include "./style.css";?></code></pre>
		</div>
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
	.ex dd ul {}
	.ex dd ul li {line-height:1.8; list-style-type:decimal; list-style-position:inside;}
	.ex dd ul li a {text-decoration:none; color:#777;}
	.ex dd ul li a:hover {color:#547DBF;}
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
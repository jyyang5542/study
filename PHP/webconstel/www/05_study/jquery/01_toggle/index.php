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
	<h4>Toggle 되는 function 만들기</h4>
	<br /><br /><br />

	<h3><span>\</span> <b>R</b>ESULT</h3>
	<div id="result">
		<dl class="ex" style="margin-top:10px;">
			<dt>아래 샘플 텍스트 버튼을 누르면 반복적으로 두 개의 텍스트가 번갈아가며 출력된다.</dt>
			<dd><b>샘플 1</b> : 내 텍스트 1</dd>
		</dl>
		<br />
		<button class="change">Change</button>

		<script type="text/javascript">
		$(function() {
			// 샘플 텍스트 1을 눌렀을 때
			function handler1() {
				$('dl.ex dd').html("<b>샘플 2</b> : 내 텍스트 2");
				$(this).text("샘플 1 출력");
				$(this).one("click", handler2);
			}
			// 샘플 텍스트 2를 눌렀을 때
			function handler2() {
				$('dl.ex dd').html("<b>샘플 1</b> : 내 텍스트 1");
				$(this).text("샘플 2 출력");
				$(this).one("click", handler1);
			}
		 
			// 버튼을 눌렀을 때
			$('#result button').one("click", handler1);
		});
		</script>
	</div>

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
	#result button {display:block; width:200px; height:40px; font-size:15px;}
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
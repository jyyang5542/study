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
	<h4>시간을 설정하여 요소 보이기/숨기기</h4>
	<br /><br /><br />

	<div id="intro">
	* PHP 5.2.0버전 이상부터 사용할 수 있는 기능인 <b>DateTime()</b>을 활용한다.<br />
	예를 들어 2018년 6월 15일 자정부터 2018년 6월 17일 자정까지 어떠한 신청을 받는다고 가정했을 때, 두 날짜 사이의 시간에만 신청버튼이 활성화되도록 설정할 수 있다.
	</div>

	
	<?php
		$nDate = new DateTime();
	 
		$sDate1 = new DateTime("2018-10-18 00:00:00");
		$eDate1 = new DateTime("2019-10-18 23:59:59");
	 
		$sDate2 = new DateTime("2019-10-18 00:00:00");
		$eDate2 = new DateTime("2019-10-18 23:59:59");
	?>

	<h3><span>\</span> <b>C</b>ODE</h3>
	<div class="code">
		<pre>
		<code class="language-php">	&lt;?php
		$nDate = new DateTime();
	 
		$sDate1 = new DateTime("2018-10-18 00:00:00");
		$eDate1 = new DateTime("2019-10-18 23:59:59");
	 
		$sDate2 = new DateTime("2019-10-18 00:00:00");
		$eDate2 = new DateTime("2019-10-18 23:59:59");
	?&gt;


	// 활성화된 케이스 (2018-10-18 ~ 2019-10-18)
	&lt;?php if ($nDate&gt;=$sDate1 && $nDate&lt;=$eDate1) {?&gt;
	&lt;a href="#" onclick='alert("지금은 활성화 되어있습니다.")'&gt;활성화됨&lt;/a&gt;
	&lt;?php } else {?&gt;
	&lt;a href="#" onclick='alert("지금은 활성화 되어있지 않습니다.")'&gt;비활성화됨&lt;/a&gt;
	&lt;?php }?&gt;


	// 비활성화된 케이스 (2019-10-18 ~)
	&lt;?php if ($nDate&gt;=$sDate2 && $nDate&lt;=$eDate2) {?&gt;
	&lt;a href="#" onclick='alert("지금은 활성화 되어있습니다.")'&gt;활성화됨&lt;/a&gt;
	&lt;?php } else {?&gt;
	&lt;a href="#" onclick='alert("지금은 활성화 되어있지 않습니다.")'&gt;비활성화됨&lt;/a&gt;
	&lt;?php }?&gt;
		</code>
		</pre>
	</div>

	<h3><span>\</span> <b>R</b>ESULT</h3>
	<div id="result">
		<dl class="ex">
			<dt>활성화된 케이스 (2018-10-18 ~ 2019-10-18)</dt>
			<dd>
				<?php if ($nDate>=$sDate1 && $nDate<=$eDate1) {?>
				<a href="#" onclick='alert("지금은 활성화 되어있습니다.")'>활성화됨</a>
				<?php } else {?>
				<a href="#" onclick='alert("지금은 활성화 되어있지 않습니다.")'>비활성화됨</a>
				<?php }?>
			</dd>
			<dt>비활성화된 케이스 (2019-10-18 ~)</dt>
			<dd>
				<?php if ($nDate>=$sDate2 && $nDate<=$eDate2) {?>
				<a href="#" onclick='alert("지금은 활성화 되어있습니다.")'>활성화됨</a>
				<?php } else {?>
				<a href="#" onclick='alert("지금은 활성화 되어있지 않습니다.")'>비활성화됨</a>
				<?php }?>
			</dd>
		</dl>
	</div>
	<br /><br /><br />

	<style type="text/css">
	.wrap {font-size:16px;}
	#intro b {color:#547DBF;}
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
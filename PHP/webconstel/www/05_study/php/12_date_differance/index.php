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
	<h4>D-Day 설정 (서로 다른 두 날짜간의 차이)</h4>
	<br /><br /><br />

	<div id="intro">* 시작일과 종료일을 지정하여 두 날짜 사이에 며칠이 존재하는지 계산한다.</div>

	<h3><span>\</span> <b>C</b>ODE</h3>
	<div class="code">
		<pre>
		<code class="language-php">	&lt;?php
			// 신정 D-Day 기능
			$date1 = new DateTime("2022-01-01"); // 내년 신정
			$date2 = new DateTime(); // 오늘
			$interval = $date2->diff($date1); // D-Day

			echo "2022년 새해까지 D-".$interval->format("%a");
		?&gt;
		</code>
		</pre>
	</div>

	<h3><span>\</span> <b>R</b>ESULT</h3>
	<div id="result">
	<?php
	//수능 D-Day 기능
		$date1 = new DateTime("2022-01-01"); // 내년 수능일
		$date2 = new DateTime(); // 오늘
		$interval = $date2->diff($date1); // D-Day
	?>
	<p class="style">2022년 새해까지 D-<?php echo $interval->format("%a");?></p>
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
	.style {margin:10px 0;}
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
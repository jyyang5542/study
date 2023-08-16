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
	<h4>CSS 애니메이션 1 (자동 애니메이션)</h4>

	<h3><span>\</span> <b>C</b>ODE</h3>
	<div class="code">
		<pre>
		<code class="language-css">	@keyframes goBig {
		from {width:50px; height:50px; line-height:50px; font-size:16px;}
		to {width:350px; height:350px; line-height:350px; font-size:32px;}
		/*
		0% { ... }
		n% { ... }
		100% { ... }
		*/
	}

	#box {
		/* 어떤 @keyframes을 사용할지 */
		animation-name:goBig;

		/* 애니메이션의 총 시간 */
		animation-duration:2s;

		/* 애니메이션 진행 속도 */
		animation-timing-function:linear;

		/* 애니메이션을 시작하기 전에 대기하는 시간 */
		animation-delay:2s;

		/* 애니메이션 반복 횟수 */
		animation-iteration-count:4;

		/* 애니메이션 진행 방향 normal | reverse | alternate | alternate-reverse | initial | inherit */
		animation-direction:alternate;

		/* 애니메이션을 마친 후 어떤 상태 */
		animation-fill-mode:none;

		/* 애니메이션을 진행할지 멈출지 */
		animation-play-state:running;

		/* 축약형 {animation: big 2s linear 2s 4 alternate none running;} */
	}
		</code>
		</pre>
	</div>

	<h3><span>\</span> <b>R</b>ESULT</h3>
	<div id="result">
		<br />
		<div id="box">Box</div>
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
	#result b {color:#547DBF;}

	@keyframes goBig {
		from {width:50px; height:50px; line-height:50px; font-size:16px;}
		to {width:350px; height:350px; line-height:350px; font-size:32px;}
	}
	#box {
		width:50px;
		height:50px;
		margin:0 auto;
		text-align:center;
		line-height:50px;
		font-size:16px;
		font-weight:bold;
		color:white;
		background:orange;
		animation-name:goBig; /* 어떤 @keyframes을 사용할지 */
		animation-duration:2s; /* 애니메이션의 총 시간 */
		animation-timing-function:linear; /* 애니메이션 진행 속도 */
		animation-delay:2s; /* 애니메이션을 시작하기 전에 대기하는 시간 */
		animation-iteration-count:4; /* 애니메이션 반복 횟수 */
		animation-direction:alternate; /* 애니메이션 진행 방향 */
		animation-fill-mode:none; /* 애니메이션을 마친 후 어떤 상태 */
		animation-play-state:running; /* 애니메이션을 진행할지 멈출지 */

		/* 축약형 {animation: big 2s linear 2s 4 alternate none running;} */
	}
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
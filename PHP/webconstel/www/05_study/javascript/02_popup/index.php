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
	<h2><b><span>S</span>TUDY / Javascript</b></h2>
	<h4>팝업창 띄우기(오픈)</h4>
	<br /><br /><br />

	<div id="intro">
		* <b>팝업창을 띄우고 제어하기</b> - 목표하는 페이지가 열리면(onload 되면) 팝업창도 동시에 나타난다.<br />
		<br />

		<table cellpadding=0 cellspacing=0 border=0>
			<tr>
				<th colspan=4>팝업창 옵션 - 옵션값으로 no 또는 1을 사용</th>
			</tr>
			<tr>
				<th>width=500</th>
				<td>팝업창의 넓이</td>
				<th>height=300</th>
				<td>팝업창의 높이</td>
			</tr>
			<tr>
				<th>top=0</th>
				<td>팝업창이 뜰 위치<br />(Y값, 상단에서부터 시작)</td>
				<th>left=0</th>
				<td>팝업창이 뜰 위치<br />(X값, 왼쪽에서부터 시작)</td>
			</tr>
			<tr>
				<th>resizable=1</th>
				<td>팝업창크기 조정가능 여부</td>
				<th>scrollbars=1</th>
				<td>스크롤바 표시여부</td>
			</tr>
			<tr>
				<th>menubar=1</th>
				<td>메뉴 표시여부</td>
				<th>toolbar=10</th>
				<td>메뉴 아이콘 표시여부</td>
			</tr>
			<tr>
				<th>location=1</th>
				<td>제목 표시줄 표시여부</td>
				<th>directories=1</th>
				<td>연결버튼(핫메일 등)</td>
			</tr>
			<tr>
				<th>status=1</th>
				<td>하단의 상태바 표시여부</td>
				<td colspan=2></td>
			</tr>
		</table>
	</div>

	<script type="text/javascript">
	// 팝업창을 열기 위한 구성
	function openWindow() {
		window.open("./popup_sample.php", "_blank", "top=0, left=0, width=500, height=300, location=1, resizable=no, scrollbars=no");
	} 
	// 실제 팝업창을 여는 스크립트
	$(function() {
		$('body').attr("onload", "openWindow()");
	});
	</script>

	<h3><span>\</span> <b>C</b>ODE</h3>
	<div class="code">
		<pre>
		<code>	&lt;script type="text/javascript"&gt;
	// 팝업창을 열기 위한 구성
	function openWindow() {
		window.open("./popup_sample.php", "_blank", "top=0, left=0, width=500, height=300, location=1, resizable=no, scrollbars=no");
	}
	// 실제 팝업창을 여는 스크립트
	$(function() {
		$('body').attr("onload", "openWindow()");
	});
	&lt;/script&gt;
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
	#intro table {width:100%; border-collapse:collapse;}
	#intro table th,
	#intro table td {
		vertical-align:middle; 
		padding:10px; 
		font-size:15px;
		border:1px solid #ddd;
	}
	#intro table th {width:15%; background:#F5F5F5;}
	#intro table td {width:35%;}
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
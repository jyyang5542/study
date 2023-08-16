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
	<h4>팝업창 띄우기(클릭)</h4>
	<br /><br /><br />

	<div id="intro">
		* <b>팝업창을 띄우고 제어하기</b> - 아래 Pop 버튼을 클릭하면 팝업창이 나타난다.<br />
		　Onclick 속성을 조건으로 팝업창을 나타나게 하는 소스<br />
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

	<h3><span>\</span> <b>R</b>ESULT</h3>
	<div id="result">
		<button onclick="javascript:popupOpen();" class="btn">Pop</button>

		<script type="text/javascript">
			function popupOpen() {
				var popUrl = "popup_sample.php";
				var popOption = "resizable=no, status=no, scrollbars=no, width=500, height=300, top=0, left=0;"
				window.open(popUrl, "팝업이름", popOption); 
				return false;
			}
			/*
			팝업창 띄울때 옵션(option) 종류
			yes나 no로 지정하면 된다.
	 
			toolbar = 상단 도구창 출력 여부
			menubar = 상단 메뉴 출력 여부
			location = 메뉴아이콘 출력 여부
			directories = 제목 표시줄 출력 여부
			status = 하단의 상태바 출력 여부
			scrollbars = 스크롤바 사용 여부
			resizable = 팝업창의 사이즈 변경 가능 여부
	 
			사이즈 정의(픽셀 px)
			width = 팝업창의 가로 길이 설정
			height = 팝업창의 세로 길이 설정
			top = 팝업창이 뜨는 위치(화면 위에서부터의 거리 지정)
			left = 팝업창이 뜨는 위치(화면 왼쪽에서부터의 거리 지정)
			*/
		</script>
	</div>

	<h3><span>\</span> <b>C</b>ODE</h3>
	<div class="code">
		<pre>
		<code>	&lt;button onclick="javascript:popupOpen();" class="btn"&gt;Pop!&lt;/button&gt;

		&lt;script type="text/javascript"&gt;
		function popupOpen() {
			var popUrl = "popup_sample.php";
			var popOption = "resizable=no, status=no, scrollbars=no, width=500, height=300, top=0, left=0;"

			window.open(popUrl, "팝업이름", popOption); 

			return false;
		}

		/*
		팝업창 띄울때 옵션(option) 종류
		yes나 no로 지정하면 된다.
 
		toolbar = 상단 도구창 출력 여부
		menubar = 상단 메뉴 출력 여부
		location = 메뉴아이콘 출력 여부
		directories = 제목 표시줄 출력 여부
		status = 하단의 상태바 출력 여부
		scrollbars = 스크롤바 사용 여부
		resizable = 팝업창의 사이즈 변경 가능 여부
 
		사이즈 정의(픽셀 px)
		width = 팝업창의 가로 길이 설정
		height = 팝업창의 세로 길이 설정
		top = 팝업창이 뜨는 위치(화면 위에서부터의 거리 지정)
		left = 팝업창이 뜨는 위치(화면 왼쪽에서부터의 거리 지정)
		*/
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
	button.btn {
		display:block; 
		width:200px; 
		margin:15px auto; 
		padding:15px 0; 
		font-weight:bold; 
		font-size:18px; 
		font-family:"Roboto Condensed", sans-serif;
		color:white; 
		border:none; 
		letter-spacing:2px;
		background:#547DBF; 
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
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
	<h4>게시판 샘플(로그 형식)</h4>
	<br /><br /><br />

	<div id="intro">
	<dl class="ex">
		<dt>개요</dt>
		<dd><b>입력</b>, <b>조회</b>, <b>수정</b>, <b>삭제</b>의 과정 중 입력과 조회까지만 작업된 미완성이다.</dd>
	</dl>
	</div>

	<h3><span>\</span> <b>C</b>ODE #1 - VIEW</h3>
	<div class="code">
		<pre>
		<code class="language-php">	&lt;?php
		// 메세지 전체를 가져와 열별로 나눔
		$all_msg = file("./log.inc", FILE_IGNORE_NEW_LINES);
		// 메세지 순서를 뒤집음
		$all_msg = array_reverse($all_msg);
		foreach ($all_msg as $line_num  =&gt; $each_msg) {
			$msg_data = explode (" / ", $all_msg[$line_num]);
			$msg_total = count($all_msg);
			// 번호 순서를 뒤집음
			$num = intval($msg_total - $line_num);
			echo "&lt;tr&gt;";
			echo "&lt;td&gt;$num&lt;/td&gt;";
			echo "&lt;td&gt;$msg_data[2]&lt;/td&gt;";
			echo "&lt;td&gt;$msg_data[3]&lt;/td&gt;";
			echo "&lt;td&gt;$msg_data[0]&lt;/td&gt;";
			echo "&lt;td&gt;$msg_data[1]&lt;/td&gt;";
			echo "&lt;/tr&gt;";
		}
	?&gt;
		</code>
		</pre>
	</div>

	<h3><span>\</span> <b>C</b>ODE #2 - WRITE</h3>
	<div class="code">
		<pre>
		<code class="language-php">	&lt;form action="write_ok.php" method="post"&gt;
		&lt;input type="text" name="name" maxlength="5" placeholder="이름" /&gt;
		&lt;input type="text" name="text" maxlength="144" placeholder="전송할 텍스트" /&gt;
		&lt;input type="submit" value="SUBMIT" /&gt;
	&lt;/form&gt;


	&lt;!--// write_ok.php --&gt;
	&lt;meta charset="utf-8" /&gt;
	&lt;?php
		// 로그 파일 생성
		// 보통은 이 과정을 외부파일로 include 시켜 하는 것 같다.
		
		if(isset($_POST['name']) && isset($_POST['text'])) {
			date_default_timezone_set('Asia/Seoul');
			$today = date("Y-m-d"); // Y.m.d 등 출력하는 양식
			$time = date("H:i"); // 초까지 나타내려면 H:i:s
			$data = $today.' / '.$time.' / ' . $_POST['name'] .' / '. $_POST['text']."\n";
			$ret = file_put_contents('./log.inc', $data, FILE_APPEND | LOCK_EX);
		 
			if($ret === false) {die('메세지 전송에 실패했습니다.');}
			else {
				echo '&lt;script&gt;alert("메세지가 전송되었습니다!");&lt;/script&gt;';
				echo '&lt;script&gt;history.back(-1);&lt;/script&gt;';
				// 입력한 정보를 다시 사용하지 않기 위해 현재 페이지로 다시 redirect
			}
		} exit();
	?&gt;
		</code>
		</pre>
	</div>

	<h3><span>\</span> <b>R</b>ESULT</h3>
	<div id="result">
		<dl class="ex">
			<dt>입력 및 조회</dt>
			<dd align="center">
				<form action="write_ok.php" method="post">
					<input type="text" name="name" maxlength="5" placeholder="이름" size="10" />
					<input type="text" name="text" maxlength="144" placeholder="전송할 텍스트" size="80" />
					<input type="submit" value="SUBMIT" />
				</form>
				<table cellpadding=0 cellspacing=0 border=0 id="board">
					<colgroup>
						<col width="5%" />
						<col width="15%" />
						<col width="50%" />
						<col width="15%" />
						<col width="15%" />
					</colgroup>
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Text</th>
						<th>Date</th>
						<th>Time</th>
					</tr>
					<?php
						// 메세지 전체를 가져와 열별로 나눔
						$all_msg = file("./log.inc", FILE_IGNORE_NEW_LINES);
						// 메세지 순서를 뒤집음
						$all_msg = array_reverse($all_msg);
						foreach ($all_msg as $line_num  => $each_msg) {
							$msg_data = explode (" / ", $all_msg[$line_num]);
							$msg_total = count($all_msg);
							// 번호 순서를 뒤집음
							$num = intval($msg_total - $line_num);
							echo "<tr>";
							echo "<td>$num</td>";
							echo "<td>$msg_data[2]</td>";
							echo "<td>$msg_data[3]</td>";
							echo "<td>$msg_data[0]</td>";
							echo "<td>$msg_data[1]</td>";
							echo "</tr>";
						}
					?>
				</table>
			</dd>
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
	#board {width:100%; margin-top:10px; border-collapse:collapse; border-top:1px solid #777;}
	#board th,
	#board td {padding:5px;}
	#board th {font-size:14px; border-bottom:1px dotted #ddd;}
	#board td {font-size:13px;}
	#board tr:not(:last-of-type) td {border-bottom:1px dotted #ddd;}
	#board td:nth-of-type(3) {text-align:left;}
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
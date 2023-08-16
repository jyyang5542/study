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
	<h4>웹 메일 보내기</h4>
	<br /><br /><br />

	<div id="intro">
	* <b>mail()</b> 함수를 이용하여 웹 메일 보내기<br />
	<br />

	<form id="mail" method="post">
		<table cellpadding=0 cellspacing=0 border=0>
			<tr>
				<th>보내는 사람</th>
				<td><input type="text" name="sendFrom" required /></td>
			</tr>
			<tr>
				<th>받는 사람</th>
				<td><input type="text" name="sendTo" required /></td>
			</tr>
			<tr>
				<th>제목</th>
				<td><input type="text" name="sendSubject" required /></td>
			</tr>
			<tr>
				<td colspan=2><textarea name="sendMsg" required></textarea></td>
			</tr>
		</table>
		
		<input type="submit" name="sendMail" value="Send Mail" />
	</form>

	<?php
		if(isset($_POST['sendFrom']) && isset($_POST['sendTo'])) {
			$to = $_POST['sendTo'];
			$from = $_POST['sendFrom'];

			$charset='UTF-8'; // 문자셋 : UTF-8
			$subject = $_POST['sendSubject'];
			$encoded_subject = "=?".$charset."?B?".base64_encode($subject)."?=\n";
			$message = $_POST['sendMsg'];
			$encoded_message = "".
				'<html><body><meta charset="utf-8" /><pre style="white-space:pre-wrap;">'.$message.'</pre></body></html>';

			// 헤더 설정
			$headers="MIME-Version: 1.0\n".
			"Content-Type: text/html; charset=".$charset."; format=flowed\n".
			"From: ".$from."\n".
			"Content-Transfer-Encoding: 8bit\n";
		 
			// 받는 사람에게 메일
			mail($to, $encoded_subject, $encoded_message, $headers);
		 
			echo '<script>alert("메일이 전송되었습니다.");</script>';
			echo '<script>"history.back()";</script>';
		}
	?>
	<br />
 
	* 웹 메일을 보낼 form이 submit 되었을 때 전송한다.<br />
	* 포털사이트를 이용하여 전송되는 것이 아니므로 스팸메일 처리될 가능성이 있다.
	</div>

	<h3><span>\</span> <b>C</b>ODE - PHP</h3>
	<div class="code">
		<pre>
		<code class="language-php">	&lt;?php
		if(isset($_POST['sendFrom']) && isset($_POST['sendTo'])) {
			$to = $_POST['sendTo'];
			$from = $_POST['sendFrom'];

			$charset='UTF-8'; // 문자셋 : UTF-8
			$subject = $_POST['sendSubject'];
			$encoded_subject = "=?".$charset."?B?".base64_encode($subject)."?=\n";
			$message = $_POST['sendMsg'];
			$encoded_message = "".
				'&lt;html&gt;&lt;body&gt;&lt;meta charset="utf-8" /&gt;'.
				'&lt;pre style="white-space:pre-wrap;"&gt;'.$message.'&lt;/pre&gt;'.
				'&lt;/body&gt;&lt;/html&gt;';

			// 헤더 설정
			$headers="MIME-Version: 1.0\n".
			"Content-Type: text/html; charset=".$charset."; format=flowed\n".
			"From: ".$from."\n".
			"Content-Transfer-Encoding: 8bit\n";
		 
			// 받는 사람에게 메일
			mail($to, $encoded_subject, $encoded_message, $headers);
		 
			echo '&lt;script&gt;alert("메일이 전송되었습니다.");&lt;/script&gt;';
			echo '&lt;script&gt;"history.back()";&lt;/script&gt;';
		}
	?&gt;
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

	.wrap #mail table {width:400px; border:1px solid #eee; border-collapse:collapse;}
	.wrap #mail table th,
	.wrap #mail table td {vertical-align:middle; padding:5px; border:1px dotted #ddd;}
	.wrap #mail table th {width:80px; background:#547DBF; color:white;}
	.wrap #mail table td {}
	.wrap #mail table td input {width:calc(100% - 2px); height:30px; border:1px solid #ddd;}
	.wrap #mail table td textarea {width:calc(100% - 2px); min-height:80px; resize:vertical; border:1px solid #ddd;}
	.wrap #mail input[type="submit"] {
		display:block;
		width:400px;
		height:40px;
		margin:10px 0;
		color:white;
		font-size:15px;
		font-weight:bold;
		background:#547DBF;
		border-radius:5px;
		border:none;
		cursor:pointer;
	}
	#intro b {color:#547DBF;}
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
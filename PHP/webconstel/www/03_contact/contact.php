<div class="wrap">
	<h2><b><span>C</span>ONTACT</b></h2>
	<h4>연락가능한 시간대 : 09:00 AM ~ 06:00 PM</h4>

	<h3><span>\</span> <b>연</b>락처 정보</h3>
	<div id="contact">
		<div class="left">
			<p><b style="letter-spacing:-0.1em;"><span>전</span>화번호</b> 010-3437-5542</p>
			<p>
				<b><span>S</span>NS</b>
				<a href="https://www.facebook.com/jungyeon.yang.184" target="_blank">
					<img src="/03_contact/facebook.png" alt="Facebook" /></a>
				<a href="https://open.kakao.com/o/s27xff0" target="_blank">
					<img src="/03_contact/kakaotalk.png" alt="Kakao" /></a>
			</p>
		</div>
		<div class="right">
			<p><b><span>E</span>-MAIL</b></p>
			<form method="post" action="./send_ok.php">
				<table cellpadding=0 cellspacing=0 border=0 id="email">
					<tr>
						<th>보내는 사람</th>
						<td><input type="text" name="sendFrom" required /></td>
					</tr>
					<tr>
						<th>받는 사람</th>
						<td>jyyang5542@gmail.com</td>
					</tr>
					<tr>
						<th>제목</th>
						<td><input type="text" name="sendSubject" required /></td>
					</tr>
					<tr>
						<th>내용</th>
						<td><textarea name="sendMsg" required></textarea></td>
					</tr>
					<tr>
						<td colspan=2>
							<input type="submit" name="sendMail" value="보내기" />
							<div style="clear:both;"></div>
						</td>
					</tr>
				</table>
				<br />
			</form>
		</div>
		<div style="clear:both;"></div>
	</div>
</div>

<style type="text/css">
#contact {position:relative; margin:40px 0; font-size:20px;}
#contact .left {width:450px; margin-right:50px;}
#contact .left p img {vertical-align:middle;}
#contact .right {position:absolute; top:0; left:500px; width:600px;}
#contact .right #email {width:100%; margin-top:-20px; border-collapse:collapse;}
#contact .right #email th,
#contact .right #email td {
	padding:10px 15px;
	vertical-align:middle; 
	font-size:15px;
}
#contact .right #email th {
	width:25%; 
	font-size:18px; 
	font-family:"Roboto Condensed", sans-serif;
	background:#F5F5F5;
	border-bottom:4px solid white;
}
#contact .right #email td {width:75%;}
#contact .right #email tr:not(:last-of-type):not(:nth-last-of-type(2)) td {border-bottom:1px dotted #ddd;}
#contact .right #email td input[type="text"] {width:calc(100% - 2px); height:30px; border:1px solid #ddd;}
#contact .right #email td textarea {width:calc(100% - 2px); min-height:120px; border:1px solid #ddd; resize:vertical;}
#contact .right #email td input[type="submit"] {
	float:right;
	display:inline-block;
	padding:10px 15px;
	vertical-align:top;
	text-decoration:none !important;
	line-height:1;
	color:white !important;
	font-size:18px;
	font-family:"맑은 고딕", sans-serif;
	background:#547DBF;
	border:none !important;
	cursor:pointer;
}
#contact .left p,
#contact .right p {height:50px; line-height:50px; margin-bottom:20px; color:#777;}
#contact .left p b,
#contact .right p b {
	display:inline-block; 
	width:120px; 
	color:#333;
	font-size:22px; 
	font-family:"Roboto Condensed", sans-serif;
}
#contact .right p b span,
#contact .left p b span {color:#547DBF;}
</style>

<?php
	include "./_layouts/top.php";
	include "./_layouts/toTop.php";
?>


<link rel="stylesheet" type="text/css" href="./03_contact.css" />

<div class="wrap">
	<h2><b><span>C</span>ONTACT</b></h2>
	<p class="sub">연락가능한 시간대 : 09:00 AM ~ 06:00 PM</p>
	<br />

	<h3><span>\</span> <b>연</b>락처 정보</h3>
	<p class="info">010-3437-5542</p>
	<br />

	<h3><span>\</span> <b>S</b>NS</h3>
	<p class="info">
		<a href="https://www.facebook.com/jungyeon.yang.184" target="_blank">
			<img src="/03_contact/facebook.png" alt="Facebook" /></a>
		<a href="https://open.kakao.com/o/s27xff0" target="_blank">
			<img src="/03_contact/kakaotalk.png" alt="Kakao" /></a>
	</p>
	<br />

	<h3><span>\</span> <b>E</b>-MAIL</h3>
	<form method="post" action="/03_contact/send_ok.php">
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
		</table>
		<input type="submit" name="sendMail" value="보내기" />
		<br />
	</form>
</div>

<script type="text/javascript">
$(function() {});
</script>

<?php include "./_layouts/bottom.php";?>
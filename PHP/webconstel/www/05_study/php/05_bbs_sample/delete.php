<?php
	include "./db_info.php";

	$id = $_GET["id"];
	$no = $_GET["no"];

	// 글 정보 가져오기
	$result=mysql_query("SELECT * FROM 테이블명 WHERE id=$id", $conn);
	$row=mysql_fetch_array($result);
?>
 
<form action="./delete_ok.php?id=<?=$_GET["id"]?>" method="post">
	<p align="center">Are you sure you want to delete this article?</p>
	<br />
	<div class="btn" align="center">
		<input type="submit" value="YES" />
		<input type="button" value="NO" onclick="history.back(-1)" />
	</div>
</form>
 
<div class="btn" align="center">
	<input type="submit" value="YES" />
	<input type="button" value="NO" onclick="history.back(-1)" />
</div>

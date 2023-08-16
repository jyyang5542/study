<?php
	include "./_layouts/_inc/db_info.php";

	$id = $_GET["id"];

	// 글 정보 가져오기
	$result=mysqli_query($conn, "SELECT * FROM portfolio WHERE id=$id");
	$row=mysqli_fetch_array($result);
?>

<link rel="stylesheet" type="text/css" href="/02_portfolio/_style.css" />

<div class="wrap">
	<h2><b><span>P</span>ORTFOLIO</b></h2>
	<?php include "./_inc.php";?>

	<h3><span>\</span> <b>글</b> 삭제</h3>
	<?php if (isset($_SESSION['admin_ID'])) {?>
	<div id="bbsdelete">
		<form action="./02_portfolio/delete_ok.php?id=<?=$_GET["id"]?>" method="post">
			<p align="center">정말로 이 포트폴리오를 삭제하시겠습니까?</p>
			<br />
			<div class="btn" align="center">
				<input type="submit" value="YES" />
				<input type="button" value="NO" onclick="history.back(-1)" />
			</div>
		</form>
	</div>
	<?php } else {?>
	<script type="text/javascript">
	alert("글삭제 권한이 없습니다.");
	history.back(-1);
	</script>
	<?php }?>
</div>
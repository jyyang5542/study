<?php
	include "./db_info.php";

	$id = $_GET["id"];

	$query = "DELETE FROM 테이블명 WHERE id=$id "; //데이터 삭제하는 쿼리문
	$result = mysql_query($query, $conn);
?>

<meta http-equiv='Refresh' content='1; URL=./list.php'>
<script type="text/javascript">alert("삭제되었습니다.");</script>

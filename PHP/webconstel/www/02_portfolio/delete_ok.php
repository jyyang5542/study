<?php
	include $_SERVER['DOCUMENT_ROOT']."/_layouts/_inc/db_info.php";

	$id = $_GET["id"];

	$query = "DELETE FROM portfolio WHERE id=$id "; //데이터 삭제하는 쿼리문
	$result = mysqli_query($conn, $query);
?>
<meta http-equiv='Refresh' content='1; URL=/?menu=portfolio'>
<font size=3 >삭제되었습니다.</font>
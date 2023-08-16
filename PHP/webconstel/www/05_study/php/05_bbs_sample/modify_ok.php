<?php
	include "./db_info.php";

	$id = $_GET["id"];
	$title = $_POST["title"];
	$category = $_POST["category"];

	$query = "UPDATE 테이블명 SET title='$title', category='$category' WHERE id=$id";
	$result=mysql_query($query, $conn);
	mysql_close($conn);

	echo ("<meta http-equiv='Refresh' content='1; URL=./write.php'>");
?>

<script type="text/javascript">
	alert("정상적으로 수정되었습니다.");
	window.location.href = "./list.php";
</script>

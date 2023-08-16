<?php
	include "./db_info.php";

	$id = $_GET["id"];
	$title = $_POST["title"];
	$category = $_POST["category"];

	$query = "INSERT INTO 테이블명 (칼럼1, 칼럼2) VALUES ('$title', '$category')";
	$result=mysql_query($query, $conn) or die(mysql_error());
	mysql_close($conn);

	echo ("<meta http-equiv='Refresh' content='1; URL=./write.php'>");
	?>

<script type="text/javascript">
	alert("정상적으로 저장되었습니다.");
	window.location.href = "./list.php";
</script>

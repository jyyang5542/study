<meta charset="utf-8" />
<?php
	include "./db_info.php";

	$id = $_GET["id"];

	$language = $_POST["language"];
	$category = $_POST["category"];
	$quote = addslashes ($_POST["quote"]);
	$author = addslashes ($_POST["author"]);
	$source = addslashes ($_POST["source"]);
	$date = '';
	if ($_POST["date"][2] == null) {$date = "Unknown";}
	elseIf ($_POST["date"][2] != null && $_POST["date"][1] == null) {$date = $_POST["date"][0];}
	else {$date = $_POST["date"][0]." - ".$date = $_POST["date"][1]." - ".$date = $_POST["date"][2];}
	$font = $_POST["font"];
	$story = addslashes ($_POST["story"]);

	$query = 
	"INSERT INTO callimania (language, category, quote, author, source, date, font, story) 
	VALUES ('$language', '$category', '$quote', '$author', '$source', '$date', '$font', '$story')";


	$result=mysql_query($query, $conn) or die(mysql_error());
	mysql_close($conn);

	echo ("<meta http-equiv='Refresh' content='1; URL=./list.php'>");
?>

<script type="text/javascript">
alert("정상적으로 저장되었습니다.");
window.location.href = "./list.php";
</script>

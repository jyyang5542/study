<?php
	$id = $_GET["id"];
	$no = $_GET["no"];
	$result=mysql_query("SELECT * FROM 테이블명 WHERE id=$id", $conn);
	$row=mysql_fetch_array($result);
?>
 
<form action="./write_ok.php" method="post" enctype="multipart/form-data">
	<input type="text" name="title" value='<?=$row["title"];?>' />
	<select name="category">
		<option <?php if ($row["category"] == "option1") echo 'selected';?> value="option1">option1</option>
	</select>
	<input type="submit" />
</form>

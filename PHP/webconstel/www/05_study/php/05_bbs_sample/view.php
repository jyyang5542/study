<?php
	include "./db_info.php";

	$id = $_GET["id"];
	$no = $_GET["no"];

	// 글 정보 가져오기
	$result=mysql_query("SELECT * FROM 테이블명 WHERE id=$id", $conn);
	$row=mysql_fetch_array($result);
?>
 
 
<table cellpadding=0 cellspacing=0 border=0>
	<tr>
		<th>No</th>
		<td><?=$row["id"];?></td>
	</tr>
	<tr>
		<th>Title</th>
		<td><?=$row["title"];?></td>
	</tr>
	<tr>
		<th>Category</th>
		<td><?=$row["category"];?></td>
	</tr>
</table>
 
 
<div class="btn">
	<div class="left" align="left">
		<?php if (isset($_SESSION['admin_ID'])) {?>
		<a href="./write.php">WRITE</a>
		<a href="./delete.php?id=<?=$id?>">DELETE</a>
		<?php }?>
	</div>
	<div class="right" align="right">
		<p class="back" onclick='javascript:history.back()'>LIST</p>
	</div>
	<div style="clear:both;"></div>
</div>
 
 
<?php mysql_query("UPDATE 테이블명 SET 조회수 칼럼 = 조회수 칼럼+1 WHERE id = $id");?>

<?php
	include "./_layouts/top.php";
	include "./_layouts/toTop.php";
?>


<link rel="stylesheet" type="text/css" href="./02_portfolio.css" />

<?php
	include "../_layouts/_inc/db_info.php";

	$id = $_GET["id"];
	$no = $_GET["no"];

	// 글 정보 가져오기
	$result=mysqli_query($conn, "SELECT * FROM portfolio WHERE id=$id");
	$row=mysqli_fetch_array($result);
?>

<img src="<?=$row["thumbnail"];?>" alt="Thumbnail" class="thumbnail" />
<div class="wrap" style="margin-top:10px;">
	<table cellpadding=0 cellspacing=0 border=0>
		<colgroup>
			<col width="30%" />
			<col width="70%" />
		</colgroup>
		<tr>
			<th>제목</th>
			<td><?=$row["title"];?></td>
		</tr>
		<tr>
			<th>카테고리</th>
			<td><?=$row["category"];?></td>
		</tr>
		<tr>
			<th>작업 기간</th>
			<td><?=$row["duration"];?> </td>
		</tr>
		<tr>
			<th>링크</th>
			<td style="border-bottom:none;">
				<?php if ($row['link_mobile']!="") {?>
				<a href="<?=$row["link_mobile"];?>" target="_blank">MOBILE 바로가기</a>
				<?php } if($row['link_responsive']!="") {?>
				<a href="<?=$row["link_responsive"];?>" target="_blank">반응형 바로가기</a>
				<?php } if($row['link_pc']=="" && $row['link_mobile']=="" && $row['link_responsive']=="") {?>
				<i>등록된 링크가 존재하지 않습니다.</i>
				<?php }?>
			</td>
		</tr>
	</table>
	<br />
	<div id="more">
		<?php if ($row["image_1"] != NULL) {?>
		<h3 class="cont"><span>\</span>&nbsp;&nbsp;&nbsp;이미지 <b>1</b></h3>
		<img src="<?=$row["image_1"];?>" alt="<?=$row["image_1"];?>" />
		<?php } if ($row["image_2"] != NULL) {?>
		<h3 class="cont"><span>\</span>&nbsp;&nbsp;&nbsp;이미지 <b>2</b></h3>
		<img src="<?=$row["image_2"];?>" alt="<?=$row["image_2"];?>" />
		<?php } if ($row["image_3"] != NULL) {?>
		<h3 class="cont"><span>\</span>&nbsp;&nbsp;&nbsp;이미지 <b>3</b></h3>
		<img src="<?=$row["image_3"];?>" alt="<?=$row["image_3"];?>" />
		<?php }?>
		<p style="text-align:center;"><?=$row["description"];?></p>
	</div> <!--// more -->
	<a class="back" href="./02_portfolio.php">목록으로</a>
	<br />
</div> <!--// wrap -->

<?php
	mysql_query("UPDATE portfolio SET view = view+1 WHERE id = $id");
	include "./_layouts/bottom.php";
?>
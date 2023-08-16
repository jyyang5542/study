<?php
	include "./_layouts/_inc/db_info.php";

	$id = $_GET["id"];
	$no = $_GET["no"];

	// 글 정보 가져오기
	$result=mysqli_query($conn, "SELECT * FROM portfolio WHERE id=$id");
	$row=mysqli_fetch_array($result);
?>

<link rel="stylesheet" type="text/css" href="/02_portfolio/_style.css" />
<link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>

<div class="wrap">
	<div id="bbsview">
		<table cellpadding=0 cellspacing=0 border=0 class="t_cont">
			<tr>
				<td class="t_left">
					<p class="hashtag"><?=$row["hashtag"];?></p>
					<h3 style="text-transform:uppercase;"><?=$row["title"];?></h3>
					<ul>
						<li>* <b style="letter-spacing:-0.1em;">카테고리</b> : <?=$row["category"];?></li>
						<li>* <b style="letter-spacing:-0.1em;">작업 기간</b> : <?=$row["duration"];?></li>
						<?php if ($row['link_pc']!="") {?>
						<li>* <b style="letter-spacing:-0.1em;"><font style="letter-spacing:0;">PC</font> 링크</b> : <a href="<?=$row["link_pc"];?>" target="_blank">바로가기</a></li>
						<?php } if ($row['link_mobile']!="") {?>
						<li>* <b style="letter-spacing:-0.1em;"><font style="letter-spacing:0;">MOBILE</font> 링크</b> : <a href="<?=$row["link_mobile"];?>" target="_blank">바로가기</a></li>
						<?php } if($row['link_responsive']!="") {?>
						<li>* <b style="letter-spacing:-0.1em;">반응형 링크</b> : <a href="<?=$row["link_responsive"];?>" target="_blank">바로가기</a></li>
						<?php } if($row['link_pc']=="" && $row['link_mobile']=="" && $row['link_responsive']=="") {?>
						<li><i style="color:#ccc;">등록된 링크가 존재하지 않습니다.</i></li>
						<?php }?>
					</ul>
					<pre><?=$row["description"];?></pre>
					<br /><br /><br /><br />

					<h4>PORTFOLIO <b>FOCUS</b><br /><span>포트폴리오 상세내용</span></h4>
					<table cellpadding=0 cellspacing=0 border=0 class="focus">
						<tr>
							<th width="25%">작업 툴</th>
							<th width="25%">작업 스킬</th>
							<th width="25%">작업 기간</th>
							<th width="25%">작업 인원</th>
						</tr>
						<tr>
							<td><?=$row["tools"];?></td>
							<td><?=$row["skills"];?></td>
							<td><?=$row["duration"];?></td>
							<td><?=$row["members"];?></td>
						</tr>
					</table>
					<?php if ($row['venchmark']=="yes") {?>
					<img src="/02_portfolio/venchmark.jpg" alt="벤치마크 안내" style="display:block; max-width:100%; margin:20px auto 0 auto;" />
					<?php }?>
				</td> <!--// t_left -->
				<td class="t_right">
					<?php if ($row["image_1"] != NULL) {?>
					<a data-fancybox="gallery" href="<?=$row["image_1"];?>" class="sample"><img src="<?=$row["image_1"];?>" alt="<?=$row["image_1"];?>" /></a>
					<?php } if ($row["image_2"] != NULL) {?>
					<br /><hr><br />
					<a data-fancybox="gallery" href="<?=$row["image_2"];?>" class="sample"><img src="<?=$row["image_2"];?>" alt="<?=$row["image_2"];?>" /></a>
					<?php } if ($row["image_3"] != NULL) {?>
					<br /><hr><br />
					<a data-fancybox="gallery" href="<?=$row["image_3"];?>" class="sample"><img src="<?=$row["image_3"];?>" alt="<?=$row["image_3"];?>" /></a>
					<?php }?>
				</td> <!--// t_right -->
			</tr>
		</table> <!--// t_cont -->
		<br /><br /><br /><br /><br />

		<div class="btn">
			<div class="left" align="left">
				<?php if (isset($_SESSION['admin_ID'])) {?>
				<a href="./?menu=portfolio&mod=write">글 쓰기</a>
				<a href="./?menu=portfolio&mod=delete&id=<?=$id?>">글 삭제</a>
				<?php }?>
			</div>
			<div class="right" align="right">
				<p class="back" onclick='window.location.href="?menu=portfolio&mod=list"'>목록으로</p>
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>
</div>

<?php mysqli_query("UPDATE portfolio SET view = view+1 WHERE id = $id");?>

<script type="text/javascript">
$(function() {
	$('.sample').fancybox();
});
</script>
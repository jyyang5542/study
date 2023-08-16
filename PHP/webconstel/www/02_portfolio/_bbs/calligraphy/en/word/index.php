<?php
	$url = '/02_portfolio/_bbs/calligraphy';

	include $_SERVER['DOCUMENT_ROOT'].$url."/en/_inc/top.php";
	include $_SERVER['DOCUMENT_ROOT'].$url."/db_info.php";

	$id = $_GET["id"];
	$no = $_GET["no"];

	// 글 정보 가져오기
	$result=mysql_query("SELECT * FROM callimania WHERE language = 'English' AND category = 'Word' ORDER BY RAND() LIMIT 1", $conn);
	$row=mysql_fetch_array($result);
?>

<div id="contents" align="center">
	<p class="tab">
		<label><a href="./"><input type="radio" name="genType" checked /> Word</a></label>
		<label><a href="../sentence"><input type="radio" name="genType" /> Sentence</a></label>
	</p> <!--// tab -->

	<div class="arrows">
		<a href="./" class="prev">◀ PREV</a>
		<a href="./" class="next">NEXT ▶</a>
		<div style="clear:both;"></div>
	</div> <!--// arrows -->

	<div id="generated" style="white-space:pre-wrap; font-family:'<?=$row["font"];?>'"><?=$row["quote"];?></div> <!--// generated -->

	<div id="info">
		<div id="info_left">
			<h2>Information</h2>
			<p class="citation">
				<b>Author</b> : <?=$row["author"];?><br />
				<b>Source</b> : <?=$row["source"];?><br />
				<br />
				<i><?=$row["date"];?></i>
			</p>
		</div> <!--// info_left -->
		<div id="info_right">
			<h2>Behind Story</h2>
			<p style="white-space:pre-wrap;"><?=$row["story"];?></p>
		</div> <!--// info_right -->
		<div style="clear:both;"></div>
	</div> <!--// info -->

	<div id="comment">
		<h2>Submit Calligraphy</h2>
		<form id="submitComm" method="post" enctype="multipart/form-data">
			<table cellpadding=0 cellspacing=0 border=0>
				<tr>
					<td width="25%"><strong>Name</strong> : <input type="text" name="name" placeholder="Your Name" maxlength="50" /></td>
					<td width="60%">
						<textarea name="description" placeholder="Comment"></textarea>
						<br />
						<input type="file" name="calligraphy" />
						<span>* Only png, jpg, gif files can be uploaded.(Max size: n MB)</span>
						<div style="clear:both;"></div>
					</td>
					<td align="right">
						<input type="submit" name="submit" value="제출" />
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'].$url."/en/_inc/bottom.php";?>
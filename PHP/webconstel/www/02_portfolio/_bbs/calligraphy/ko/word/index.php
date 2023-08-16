<?php
	$url = '/02_portfolio/_bbs/calligraphy';

	include $_SERVER['DOCUMENT_ROOT'].$url."/ko/_inc/top.php";
	include $_SERVER['DOCUMENT_ROOT'].$url."/db_info.php";

	$id = $_GET["id"];
	$no = $_GET["no"];

	// 글 정보 가져오기
	$result=mysql_query("SELECT * FROM callimania WHERE language = 'Korean' AND category = 'Word' ORDER BY RAND() LIMIT 1", $conn);
	$row=mysql_fetch_array($result);
?>

<div id="contents" align="center">
	<p class="tab">
		<label><a href="./"><input type="radio" name="genType" checked /> 단어 생성</a></label>
		<label><a href="../sentence"><input type="radio" name="genType" /> 문장 생성</a></label>
	</p> <!--// tab -->

	<div class="arrows">
		<a href="./" class="prev">◀  이전</a>
		<a href="./" class="next">다음 ▶</a>
		<div style="clear:both;"></div>
	</div> <!--// arrows -->

	<div id="generated" style="white-space:pre-wrap; font-family:'<?=$row["font"];?>'"><?=$row["quote"];?></div> <!--// generated -->

	<div id="info">
		<div id="info_left">
			<h2>단어 정보</h2>
			<p class="citation">
				<b>작가</b> : <?=$row["author"];?><br />
				<b>출처</b> : <?=$row["source"];?><br />
				<br />
				<i><?=$row["date"];?></i>
			</p>
		</div> <!--// info_left -->
		<div id="info_right">
			<h2>관련 일화</h2>
			<p style="white-space:pre-wrap;"><?=$row["story"];?></p>
		</div> <!--// info_right -->
		<div style="clear:both;"></div>
	</div> <!--// info -->

	<div id="comment">
		<h2>내 캘리그라피 자랑하기</h2>
		<form id="submitComm" method="post" enctype="multipart/form-data">
			<table cellpadding=0 cellspacing=0 border=0>
				<tr>
					<td width="25%"><strong>이름</strong> : <input type="text" name="name" placeholder="이름 또는 별명" maxlength="50" /></td>
					<td width="60%">
						<textarea name="description" placeholder="Comment"></textarea>
						<br />
						<input type="file" name="calligraphy" />
						<span>* png, jpg, gif 파일만 업로드 가능합니다.(파일 최대크기: n MB)</span>
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

<?php include $_SERVER['DOCUMENT_ROOT'].$url."/ko/_inc/bottom.php";?>
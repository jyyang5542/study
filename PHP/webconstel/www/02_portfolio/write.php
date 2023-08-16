<link rel="stylesheet" type="text/css" href="/02_portfolio/_style.css" />

<div class="wrap">
	<h2><b><span>P</span>ORTFOLIO</b></h2>

	<script type="text/javascript">
	$(document).ready(function() {
		$('.show-category').hide();
		$('.input-category').change(function() {
			if ($(this).hasClass("pc") && $(this).is(':checked')) {$('tr.pc').show();}
			else if ($(this).hasClass("pc") && !$(this).is(':checked')) {
				$('tr.pc').hide();
				$('input[name="link_pc"]').val("");
			}
			if ($(this).hasClass("mobile") && $(this).is(':checked')) {$('tr.mobile').show();}
			else if ($(this).hasClass("mobile") && !$(this).is(':checked')) {
				$('tr.mobile').hide();
				$('input[name="link_mobile"]').val("");
			}
			if ($(this).hasClass("responsive") && $(this).is(':checked')) {$('tr.responsive').show();}
			else if ($(this).hasClass("responsive") && !$(this).is(':checked')) {
				$('tr.responsive').hide();
				$('input[name="link_responsive"]').val("");
			}
		});
	});
	</script>

	<h3><span>\</span> <b>글</b> 쓰기</h3>
	<?php if (isset($_SESSION['admin_ID'])) {?>
	<div id="bbswrite">
		<form action="./02_portfolio/write_ok.php" method="post" enctype="multipart/form-data">
			<table cellpadding=0 cellspacing=0 border=0>
				<tr>
					<th><span>썸</span>네일</th>
					<td><input type="file" name="thumbnail" /></td>
				</tr>
				<tr>
					<th><span>타</span>이틀</th>
					<td><input type="text" name="title" /></td>
				</tr>
				<tr>
					<th><span>해</span>시태그</th>
					<td><input type="text" name="hashtag" placeholder="#PC, #Mobile 등" /></td>
				</tr>
				<tr>
					<th><span>카</span>테고리</th>
					<td>
						<label><input type="checkbox" name="category[]" value="PC" class="input-category pc" /> PC</label>&nbsp;&nbsp;&nbsp;
						<label><input type="checkbox" name="category[]" value="MOBILE" class="input-category mobile" /> MOBILE</label>&nbsp;&nbsp;&nbsp;
						<label><input type="checkbox" name="category[]" value="반응형" class="input-category responsive" /> 반응형</label>&nbsp;&nbsp;&nbsp;
						<label><input type="checkbox" name="category[]" value="게시판/프로그램" class="input-category program" /> 게시판/프로그램</label>&nbsp;&nbsp;&nbsp;
						<label><input type="checkbox" name="category[]" value="디자인" class="input-category design" /> 디자인</label>
					</td>
				</tr>
				<tr>
					<th><span>벤</span>치마크 여부</th>
					<td>
						<label><input type="radio" name="venchmark" value="no" checked> 아니오</label>&nbsp;&nbsp;&nbsp;
						<label><input type="radio" name="venchmark" value="yes"> 예</label>
				</tr>
				<tr class="show-category pc">
					<th><span>링</span>크 <font style="letter-spacing:0;">(PC)</font></th>
					<td><input type="text" name="link_pc" placeholder="http://" /></td>
				</tr>
				<tr class="show-category mobile">
					<th><span>링</span>크 <font style="letter-spacing:0;">(MOBILE)</font></th>
					<td><input type="text" name="link_mobile" placeholder="http://" /></td>
				</tr>
				<tr class="show-category responsive">
					<th><span>링</span>크 (반응형)</th>
					<td><input type="text" name="link_responsive" placeholder="http://" /></td>
				</tr>
				<tr>
					<th><span>이</span>미지</th>
					<td>
						<input type="file" name="image[]" /><br />
						<input type="file" name="image[]" /><br />
						<input type="file" name="image[]" />
					</td>
				</tr>
				<tr>
					<th><span>작</span>업 설명</th>
					<td><textarea name="description"></textarea></td>
				</tr>
			</table>

			<h3><span>\</span> <font style="letter-spacing:0;">PORTFOLIO <b>FOCUS</b></font></h3>
			<table cellpadding=0 cellspacing=0 border=0>
				<tr>
					<th><span>작</span>업 툴</th>
					<td>
						<label><input type="checkbox" name="tools[]" value="Adobe Photoshop" /> Adobe Photoshop</label><br />
						<label><input type="checkbox" name="tools[]" value="Adobe Illustrator" /> Adobe Illustrator</label><br />
						<label><input type="checkbox" name="tools[]" value="Edit Plus" /> Edit Plus</label>
					</td>
				</tr>
				<tr>
					<th><span>사</span>용 스킬</th>
					<td>
						<label><input type="checkbox" name="skills[]" value="HTML" /> HTML</label><br />
						<label><input type="checkbox" name="skills[]" value="PHP" /> PHP</label><br />
						<label><input type="checkbox" name="skills[]" value="CSS" /> CSS</label><br />
						<label><input type="checkbox" name="skills[]" value="Javascript & jQuery" /> Javascript & jQuery</label><br />
						<label><input type="checkbox" name="skills[]" value="부트스트랩" /> 부트스트랩</label><br />
						<label><input type="checkbox" name="skills[]" value="UI 디자인" /> UI 디자인</label><br />
						<label><input type="checkbox" name="skills[]" value="타이포그래피" /> 타이포그래피</label><br />
						<label><input type="checkbox" name="skills[]" value="디자인 소스 편집" /> 디자인 소스 편집</label><br />
						<label><input type="checkbox" name="skills[]" value="프로그램 소스 편집" /> 프로그램 소스 편집</label>
					</td>
				</tr>
				<tr>
					<th><span>작</span>업 기간</th>
					<td><input type="text" name="duration" maxlength=3 style="width:60px;" placeholder="n 일"/></td>
				</tr>
				<tr>
					<th><span>작</span>업 인원</th>
					<td><input type="number" name="members" maxlength=3 /> 명</td>
				</tr>
			</table>
			<br /><br />

			<div class="btn">
				<div class="left">
					<p onclick='javascript:history.back(-2)'>목록으로</p>
					<input type="reset" value="리셋" />
				</div>
				<div class="right">
					<input type="submit" name="submit" value="저장" />
				</div>
				<div style="clear:both;"></div>
			</div>
			<br /><br />
		</form>
	</div>
	<?php } else {?>
	<script type="text/javascript">
	alert("글쓰기 권한이 없습니다.");
	history.back(-1);
	</script>
	<?php }?>
</div>
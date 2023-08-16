<?php
	$url = '/02_portfolio/_bbs/calligraphy';

	include $_SERVER['DOCUMENT_ROOT'].$url."/en/_inc/top.php";
	include $_SERVER['DOCUMENT_ROOT'].$url."/db_info.php";

	# LIST 설정
	# 1. 한 페이지에 보여질 게시물의 수
	$page_size=20;

	# 2. 페이지 나누기에 표시될 페이지의 수
	// $no는 페이지가 시작되는 첫 글의 순번이다.
	$page_list_size = 5;
	$no = $_GET["no"];
	if (!$no || $no <0) $no=0;

	// 데이터베이스에서 페이지의 첫번째 글($no)부터 
	// $page_size 만큼의 글을 가져온다.
	$query = "SELECT * FROM callimania WHERE language = 'English' AND category = 'Word' ORDER BY id DESC LIMIT $no, $page_size";
	$result = mysql_query($query, $conn);

	// 총 게시물 수 를 구한다.
	$result_count=mysql_query("SELECT count(*) FROM callimania WHERE language = 'English' AND category = 'Word'", $conn);
	$result_row=mysql_fetch_row($result_count);
	$total_row = $result_row[0];
	//결과의 첫번째 열이 count(*) 의 결과다.
	//mysql_fetch_row 쓰면 $result_row[0] 처럼 숫자를 써서 접근을 해야한다. 

	# 총 페이지 계산
	# ceil는 올림이다. 
	if ($total_row <= 0) $total_row = 0;
	$total_page = ceil($total_row / $page_size);//1개면

	# 현재 페이지 계산
	# no 변수는 0부터 시작해서 +1을 해줌.
	$current_page = ceil(($no+1)/$page_size);

	if (isset($_SESSION['admin_ID'])) {
?>

<div id="contents">
	<p class="tab" align="center" style="width:900px; margin:0 auto 20px auto;">
		<label><a href="./list.php"><input type="radio" name="genType" disabled /> All</a></label>
		<label><a href="./list_ko_word.php"><input type="radio" name="genType" disabled /> Korean / Word</a></label>
		<label><a href="./list_ko_sentence.php"><input type="radio" name="genType" disabled /> Korean / Sentence</a></label>
		<label><a href="./list_en_word.php"><input type="radio" name="genType" checked /> English / Word</a></label>
		<label><a href="./list_en_sentence.php"><input type="radio" name="genType" disabled /> English / Sentence</a></label>
	</p> <!--// tab -->
	<br />

	<table cellpadding=0 cellspacing=0 border=0>
		<colgroup>
			<col width="5%" />
			<col width="25%" />
			<col width="15%" />
			<col width="15%" />
			<col width="15%" />
			<col width="15%" />
		</colgroup>
		<thead>
			<tr>
				<th>ID</th>
				<th>Quote</th>
				<th>Language</th>
				<th>Category</th>
				<th>Author</th>
				<th>Font</th>
			</tr>
		</thead>
		<tbody>
			<?php while($row=mysql_fetch_array($result)) {?>
			<tr>
				<td><?=$row["id"]?></td>
				<td><?=$row["quote"]?></td>
				<td><?=$row["language"]?></td>
				<td><?=$row["category"]?></td>
				<td><?=$row["author"]?></td>
				<td><?=$row["font"]?></td>
			</tr>
			<?php } mysql_close($conn);?>
		</tbody>
	</table>
	<br /><br /><br />

	<div class="page" align="center">
	<?php
		$start_page = floor(($current_page - 1) / $page_list_size) * $page_list_size + 1;
		# floor 함수는 소수점 이하는 버림

		# 페이지 리스트의 마지막 페이지가 몇 번째 페이지인지 구하는 부분이다.
		$end_page = $start_page + $page_list_size - 1;

		if ($total_page <$end_page) $end_page = $total_page;

		if ($start_page >= $page_list_size) {
			# 이전 페이지 리스트값은 첫 번째 페이지에서 한 페이지 감소하면 된다.
			# $page_size 를 곱해주는 이유는 글번호로 표시하기 위해서이다.

			$prev_list = ($start_page - 2)*$page_size;
			echo "<a href=".$PHP_SELF."?no=0 style='margin:0; text-decoration:none; color:#555;'>《</a>&nbsp;";
			echo "<a href=".$PHP_SELF."?no=".$prev_list." style='margin:0; text-decoration:none; color:#555;'>〈</a>&nbsp;";
		}

		# 페이지 리스트를 출력
		for ($i=$start_page;$i <= $end_page;$i++) {
			$page= ($i-1) * $page_size;// 페이지값을 no 값으로 변환.
			if ($no!=$page) { //현재 페이지가 아닐 경우만 링크를 표시
				echo "<a href=".$PHP_SELF."?no=".$page.">$i</a>";
			}
			else {
				echo "<b style='color:#000; font-weight:900'>$i</b>";
			}
		}

		# 다음 페이지 리스트가 필요할때는 총 페이지가 마지막 리스트보다 클 때이다.
		# 리스트를 다 뿌리고도 더 뿌려줄 페이지가 남았을때 다음 버튼이 필요할 것이다.
		if($total_page >$end_page) {
			$next_list = $end_page * $page_size;
			$last_list = $total_row-($total_row%$page_size);
			echo "&nbsp;<a href=".$PHP_SELF."?no=".$next_list." style='margin:0; text-decoration:none; color:#555;'>〉</a>";
			echo "&nbsp;<a href=".$PHP_SELF."?no=".$last_list." style='margin:0; text-decoration:none; color:#555;'>》</a>";
		}
	?>
	</div> <!--// page -->
</div>

<style type="text/css">
#contents {width:1080px; margin:0 auto;}
#contents h2 {font-size:24px;}
#contents table {width:100%; border-collapse:collapse;}
#contents table th,
#contents table td {padding:5px; vertical-align:middle; border:1px solid #ddd;}
#contents table th {font-size:16px; color:white; background:#222;}
#contents table td {font-size:14px;}
#contents table td:not(:nth-of-type(2)) {text-align:center;}
.page {font-size:14px;}
</style>

<?php } include $_SERVER['DOCUMENT_ROOT'].$url."/ko/_inc/bottom.php";?>
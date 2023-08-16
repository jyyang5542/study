<?php
	include "./db_info.php";

	# LIST 설정
	# 1. 한 페이지에 보여질 게시물의 수
	$page_size=20;

	# 2. 페이지 나누기에 표시될 페이지의 수
	// $no는 페이지가 시작되는 첫 글의 순번이다.
	$page_list_size = 5;
	$no = $_GET["no"];
	if (!$no || $no<0) $no=0;

	// 데이터베이스에서 페이지의 첫번째 글($no)부터 
	// $page_size 만큼의 글을 가져온다.
	$query = "SELECT * FROM 테이블명 ORDER BY id DESC LIMIT $no, $page_size";
	$result = mysql_query($query, $conn);

	// 총 게시물 수 를 구한다.
	$result_count=mysql_query("SELECT count(*) FROM 테이블명", $conn);
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
?>
 
 
<?php while($row=mysql_fetch_array($result)) {?>
<a href="./view.php?id=<?=$row["id"]?>&no=<?=$no?>">게시글 이름</a>
<?php } mysql_close($conn);?>
 
 
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
		echo "<a href=".$PHP_SELF."?no=0 style=''>《</a> ";
		echo "<a href=".$PHP_SELF."?no=".$prev_list." style=''>〈</a> ";
	} 
	# 페이지 리스트를 출력
	for ($i=$start_page;$i <= $end_page;$i++) {
		$page= ($i-1) * $page_size;// 페이지값을 no 값으로 변환.
		if ($no!=$page) { //현재 페이지가 아닐 경우만 링크를 표시
			echo "<a href=".$PHP_SELF."?no=".$page.">$i</a>";
		}
		else {
			echo "<b style=''>$i</b>";
		}
	}
	# 다음 페이지 리스트가 필요할때는 총 페이지가 마지막 리스트보다 클 때이다.
	# 리스트를 다 뿌리고도 더 뿌려줄 페이지가 남았을때 다음 버튼이 필요할 것이다.
	if($total_page >$end_page) {
		$next_list = $end_page * $page_size;
		$last_list = $total_row-($total_row%$page_size);
		echo " <a href=".$PHP_SELF."?no=".$next_list." style=''>〉</a>";
		echo " <a href=".$PHP_SELF."?no=".$last_list." style=''>》</a>";
	}
?>
</div> <!--// page -->
 
 
<?php if (isset($_SESSION['admin_ID'])) {?>
<div class="btn">
	<div class="left">
		<a href="./write.php" style="color:white;">WRITE</a>
	</div>
	<div class="right"></div>
	<div style="clear:both;"></div>
</div>
<?php }?>
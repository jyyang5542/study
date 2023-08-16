<?php
	include "./_layouts/top.php";
	include "./_layouts/toTop.php";
?>


<link rel="stylesheet" type="text/css" href="./02_portfolio.css" />
<link rel="stylesheet" type="text/css" href="/_layouts/js/jaliswall.css" />
<script type="text/javascript" src="/_layouts/js/jaliswall.js"></script>

<?php
	include "../_layouts/_inc/db_info.php";

	$page_size=3;
	$page_list_size = 5;
	$no = $_GET["no"];
	if (!$no || $no <0) $no=0;

	$query = "SELECT * FROM portfolio ORDER BY id DESC LIMIT $no, $page_size";

	$result = mysqli_query($conn, $query);
	$result_count=mysqli_query($conn, "SELECT count(*) FROM portfolio");
	$result_row=mysqli_fetch_row($result_count);
	$total_row = $result_row[0];

	if ($total_row <= 0) $total_row = 0;
	$total_page = ceil($total_row / $page_size);//1개면
	$current_page = ceil(($no+1)/$page_size);
?>

<div class="wrap">
	<h2><span>P</span>ORTFOLIO</h2>
	<div class="wall">
		<?php while($row=mysqli_fetch_array($result)) {?>
		<a class="wall-item" href="./view.php?id=<?=$row["id"]?>&no=<?=$no?>">
			<img src="<?=$row["thumbnail"]?>" alt="<?=$row["id"]?>" style="border:1px solid #eee;" />
			<p><b>[<?=$row["category"]?>]</b> <?=$row["title"]?></p>
		</a>
		<?php } mysqli_close($conn);?>
		<div style="clear:both;"></div>
	</div>

	<div class="page" align="center">
	<?php
		$start_page = floor(($current_page - 1) / $page_list_size) * $page_list_size + 1;
		$end_page = $start_page + $page_list_size - 1;

		if ($total_page <$end_page) $end_page = $total_page;

		if ($start_page >= $page_list_size) {
			$prev_list = ($start_page - 2)*$page_size;
			echo "<a href=".$PHP_SELF."?no=0 style='margin:0; text-decoration:none; color:#555;'>《</a>&nbsp;&nbsp;";
			echo "<a href=".$PHP_SELF."?no=".$prev_list." style='margin:0; text-decoration:none; color:#555;'>〈</a>&nbsp;&nbsp;";
		}
		for ($i=$start_page;$i <= $end_page;$i++) {
			$page= ($i-1) * $page_size;// 페이지값을 no 값으로 변환.
			if ($no!=$page) { //현재 페이지가 아닐 경우만 링크를 표시
				echo "&nbsp;<a href=".$PHP_SELF."?no=".$page.">$i</a>&nbsp;";
			} else {
				echo "&nbsp;<b style='color:#547DBF; font-weight:900'>$i</b>&nbsp;";
			}
		}
		if($total_page >$end_page) {
			$next_list = $end_page * $page_size;
			$last_list = $total_row-($total_row%$page_size);
			echo "&nbsp;&nbsp;<a href=".$PHP_SELF."?no=".$next_list." style='margin:0; text-decoration:none; color:#555;'>〉</a>";
			echo "&nbsp;&nbsp;<a href=".$PHP_SELF."?no=".$last_list." style='margin:0; text-decoration:none; color:#555;'>》</a>";
		}
	?>
	</div> <!--// page -->
</div>

<script type="text/javascript">
$(function() {});
</script>

<?php include "./_layouts/bottom.php";?>
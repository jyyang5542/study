<link rel="stylesheet" type="text/css" href="/02_portfolio/_style.css" />
<link rel="stylesheet" type="text/css" href="/_layouts/js/jaliswall.css" />
<script type="text/javascript" src="/_layouts/js/jaliswall.js"></script>

<?php
	include "./_layouts/_inc/db_info.php";

	$page_size=9;
	$page_list_size = 5;
	$no = $_GET["no"];
	if (!$no || $no <0) $no=0;
?>

<div class="wrap">
	<h2><b><span>P</span>ORTFOLIO</b></h2>

	<?php
	include "./02_portfolio/_inc.php";
	switch($_GET['category']) {
		case "all" :
			$query = "SELECT * FROM portfolio ORDER BY id DESC LIMIT $no, $page_size";
			$category = "";
			echo "<h3><span>\</span> <b>전</b>체</h3>";
			break;
		case "pc" :
			$query = "SELECT * FROM portfolio WHERE category LIKE '%PC%' ORDER BY id DESC LIMIT $no, $page_size";
			$category = " WHERE category LIKE '%PC%'";
			echo "<h3><span>\</span> <font style='letter-spacing:0;'><b>P</b>C</font></h3>";
			break;
		case "mobile" :
			$query = "SELECT * FROM portfolio WHERE category LIKE '%MOBILE%' ORDER BY id DESC LIMIT $no, $page_size";
			$category = " WHERE category LIKE '%MOBILE%'";
			echo "<h3><span>\</span> <font style='letter-spacing:0;'><b>M</b>OBILE</font></h3>";
			break;
		case "responsive" :
			$query = "SELECT * FROM portfolio WHERE category LIKE '%반응형%' ORDER BY id DESC LIMIT $no, $page_size";
			$category = " WHERE category LIKE '%반응형%'";
			echo "<h3><span>\</span> <b>반</b>응형</h3>";
			break;
		case "program" :
			$query = "SELECT * FROM portfolio WHERE category LIKE '%프로그램%' ORDER BY id DESC LIMIT $no, $page_size";
			$category = " WHERE category LIKE '%프로그램%'";
			echo "<h3><span>\</span> <b>게</b>시판/프로그램</h3>";
			break;
		case "design" :
			$query = "SELECT * FROM portfolio WHERE category LIKE '%디자인%' ORDER BY id DESC LIMIT $no, $page_size";
			$category = " WHERE category LIKE '%디자인%'";
			echo "<h3><span>\</span> <b>디</b>자인</h3>";
			break;
		default :
			$query = "SELECT * FROM portfolio ORDER BY id DESC LIMIT $no, $page_size";
			break;
	}

	$result = mysqli_query($conn, $query);
	$result_count=mysqli_query($conn, "SELECT count(*) FROM portfolio".$category);
	$result_row=mysqli_fetch_row($result_count);
	$total_row = $result_row[0];

	if ($total_row <= 0) $total_row = 0;
	$total_page = ceil($total_row / $page_size);
	$current_page = ceil(($no+1)/$page_size);
	?>
	<div id="portfolio">
		<div class="wall" id="bbslist">
			<?php while($row=mysqli_fetch_array($result)) {?>
			<a class="wall-item" href="/?menu=portfolio&mod=view&id=<?=$row["id"]?>&no=<?=$no?>">
				<img src="<?=$row["thumbnail"]?>" alt="<?=$row["id"]?>" style="border:1px solid #eee;" />
				<p><b>[<?=$row["category"]?>]</b> <font style="letter-spacing:-0.08em;"><?=$row["title"]?></font></p>
			</a>
			<?php } mysqli_close($conn);?>
		</div>
		<div style="clear:both;"></div>
		<br /><br />

		<div class="page" align="center">
		<?php
			$http_host = $_SERVER['HTTP_HOST'];
			$request_uri = $_SERVER['REQUEST_URI'];
			$url = 'http://' . $http_host . $request_uri;

			$start_page = floor(($current_page - 1) / $page_list_size) * $page_list_size + 1;
			$end_page = $start_page + $page_list_size - 1;

			if ($total_page <$end_page) $end_page = $total_page;
			if ($start_page >= $page_list_size) {
				$prev_list = ($start_page - 2)*$page_size;
				echo "<a href=".$PHP_SELF."?no=0 style='margin:0; text-decoration:none; color:#555;'>《</a>&nbsp;";
				echo "<a href=".$PHP_SELF."?no=".$prev_list." style='margin:0; text-decoration:none; color:#555;'>〈</a>&nbsp;";
			}

			# 페이지 리스트를 출력
			for ($i=$start_page;$i <= $end_page;$i++) {
				$page= ($i-1) * $page_size; // 페이지값을 no 값으로 변환.
				if ($no!=$page) { // 현재 페이지가 아닐 경우만 링크를 표시
					echo "&nbsp;<a href=".$url."&no=".$page.">$i</a>&nbsp;";
				} else {
					echo "&nbsp;<b style='color:#547DBF; font-weight:900'>$i</b>&nbsp;";
				}
			}

			if($total_page >$end_page) {
				$next_list = $end_page * $page_size;
				$last_list = $total_row-($total_row%$page_size);
				echo "&nbsp;<a href=".$PHP_SELF."?no=".$next_list." style='margin:0; text-decoration:none; color:#555;'>〉</a>";
				echo "&nbsp;<a href=".$PHP_SELF."?no=".$last_list." style='margin:0; text-decoration:none; color:#555;'>》</a>";
			}
		?>
		</div> <!--// page -->
		<br /><br />

		<?php if (isset($_SESSION['admin_ID'])) {?>
		<div class="btn">
			<div class="left">
				<a href="/?menu=portfolio&mod=write" style="color:white;">글 쓰기</a>
			</div>
			<div class="right"></div>
			<div style="clear:both;"></div>
		</div>
		<?php }?>
	</div>
</div>

<script type="text/javascript">
$(function() {
	$('.wall').jaliswall({item:'.wall-item'});
});
</script>
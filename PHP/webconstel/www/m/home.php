<?php
	include "./_layouts/top.php";
	include "../_layouts/_inc/db_info.php";

	$page_size=5;
	$page_list_size = 5;
	$no = $_GET["no"];
	if (!$no || $no <0) $no=0;

	$query = "SELECT * FROM portfolio ORDER BY id DESC LIMIT $no, $page_size";
	$result = mysqli_query($conn, $query);
?>

<link rel="stylesheet" type="text/css" href="./home.css" />

<div id="visual">
	<div id="rolling">
		<?php while($row=mysqli_fetch_array($result)) {?>
		<a href="./view.php?id=<?=$row["id"]?>&no=<?=$no?>">
			<img src="<?=$row["thumbnail"]?>" alt="<?=$row["title"]?>" />
		</a>
		<?php } mysqli_close($conn);?>
	</div>
</div>

<div id="notice">
	<strong>NOTICE</strong>
	<span>[2021-01-01] 새해 복 많이 받으세요!</span>
</div>

<div class="wrap">
	<h2 style="letter-spacing:-0.1em;"><b>웹 퍼블리셔<br /><span>양정연</span>의<br />포트폴리오</b></h2>
	<h4>HTML5 / PHP / CSS3 / JAVASCRIPT / J-QUERY</h4>

	<div id="btns">
		<a href="./01_about.php"><img src="./btn_about.png" alt="About" /></a>
		<a href="./02_portfolio.php"><img src="./btn_portfolio.png" alt="Portfolio" /></a>
		<a href="./03_contact.php"><img src="./btn_contact.png" alt="Contact" /></a>
		<a href="./04_sitemap.php"><img src="./btn_sitemap.png" alt="Site Map" /></a>
	</div>
</div>

<script type="text/javascript">
$(function() {
	imgWidth = $(window).width();
	imgHeight = $(window).width()/6*4;

	$('#rolling img').each(function() {$(this).css('width', imgWidth+"px");});
	$('#visual').css('height', imgHeight+"px");

	var i = 1;
	rolling = setInterval(function() {
		i++;
		$('#rolling a').hide();
		$('#rolling a:nth-of-type('+i+')').fadeIn(1500);

		if (i == $('#rolling a').length) {i = 0;}
	}, 3000);
});
</script>

<?php include "./_layouts/bottom.php";?>
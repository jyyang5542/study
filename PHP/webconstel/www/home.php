<link rel="stylesheet" type="text/css" href="/_layouts/js/jaliswall.css" />
<script src="/_layouts/js/t.min.js"></script>
<script type="text/javascript" src="/_layouts/js/jaliswall.js"></script>

<?php
	include "./_layouts/_inc/db_info.php";

	$page_size=9;

	$page_list_size = 5;
	$no = $_GET["no"];
	if (!$no || $no <0) $no=0;

	$query = "SELECT * FROM portfolio ORDER BY id DESC LIMIT $no, $page_size";
	$result = mysqli_query($conn, $query);

	$result_count=mysqli_query($conn, "SELECT count(*) FROM portfolio");
	$result_row=mysqli_fetch_row($result_count);
	$total_row = $result_row[0];

	if ($total_row <= 0) $total_row = 0;
	$total_page = ceil($total_row / $page_size);
	$current_page = ceil(($no+1)/$page_size);
?>

<div class="wrap">
	<h2 id="typewriter" style="letter-spacing:-0.1em;"><b>웹 퍼블리셔<br /><span>양정연</span>의</b> 포트폴리오</h2>
	<h4>HTML / PHP / CSS / JAVASCRIPT / J-QUERY</h4>

	<h3><span>\</span> 최근 <b>작업물</b></h3>
	<div id="portfolio">
		<div class="wall" id="bbslist">
			<?php while($row=mysqli_fetch_array($result)) {?>
			<a class="wall-item" href="/?menu=portfolio&mod=view&id=<?=$row["id"]?>&no=<?=$no?>">
				<img src="<?=$row["thumbnail"]?>" alt="<?=$row["id"]?>" style="border:1px solid #eee;" />
				<p><b>[<?=$row["category"]?>]</b> <?=$row["title"]?></p>
			</a>
			<?php } mysqli_close($conn);?>
		</div>
	</div>
	<br /><br />
</div>

<style type="text/css">
.t-caret {color:#eee !important; font-weight:normal;}

@media only screen and (min-width:1201px) {
	h2#typewriter {font-size:90px !important; height:208px !important;}
}
@media only screen and (max-width:1200px) {
	h2#typewriter {font-size:60px !important; height:138px !important;}
}
</style>

<script type="text/javascript">
$(function() {
	$('.wall').jaliswall({item:'.wall-item'});
	$('#typewriter').t({
		speed:75,
		speed_vary:true,
		delay:false,
		mistype:false,
		locale:'en',
		caret:false,
		blink:true, 
		blink_perm:true,
		tag:'b',
		pause_on_click:false,
		repeat:false,
		init:function(elem){},
		typing:function(elem,chars_total,chars_left,char){},
		fin:function(elem){}
	});
});
</script>

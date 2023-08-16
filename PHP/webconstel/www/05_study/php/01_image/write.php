<?php
	include $_SERVER['DOCUMENT_ROOT']."/_layouts/_inc/top.php";
	include $_SERVER['DOCUMENT_ROOT']."/_layouts/_inc/db_info.php";
?>

<!--### 코드로 표현하는 플러그인 ###-->
<link rel="stylesheet" type="text/css" href="/_layouts/js/highlight/styles/default.css" />
<script type="text/javascript" src="/_layouts/js/highlight/highlight.pack.js"></script>
<script type="text/javascript" src="/_layouts/js/highlight/highlightjs-line-numbers.min.js"></script>
<script>
	hljs.initHighlightingOnLoad();
	hljs.initLineNumbersOnLoad();
</script>

<div class="wrap">
	<?php if (isset($_SESSION['admin_ID'])) {?>
	<h2><b><span>S</span>TUDY / PHP</b></h2>
	<h4>복수 이미지 파일 전송하기</h4>
	<br /><br /><br />

	<div id="bbswrite">
		<form action="./write_ok.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="MAX_FILE_SIZE" value="300000" />
			<table cellpadding=0 cellspacing=0 border=0>
				<tr>
					<th>&nbsp;FILE #1&nbsp;</th>
					<td><input type="file" name="image[]" /></td>
				</tr>
				<tr>
					<th>&nbsp;FILE #2&nbsp;</th>
					<td><input type="file" name="image[]" /></td>
				</tr>
				<tr>
					<th>&nbsp;FILE #3&nbsp;</th>
					<td><input type="file" name="image[]" /></td>
				</tr>
				<tr>
					<th>&nbsp;FILE #4&nbsp;</th>
					<td><input type="file" name="image[]" /></td>
				</tr>
			</table>
			<br />
			<input type="submit" name="submit" value="SUBMIT" />
			<div style="clear:both;"></div>
		</form>
	</div>

	<h3><span>\</span> <b>C</b>ODE</h3>
	<div class="code">
		<pre>
		<code class="language-php">	// write_ok.php
	&lt;?php
		include "./db_info.php";

		$id = $_GET["id"];
		define("save_path", "upload/");
		for($i=0; $i&lt;=count($_FILES['image']['name']); $i++) {
			if( $_FILES['image']['size'][$i] && !$_FILES['image']['error'][$i] ) {

				$file_name[$i] = $_FILES['image']['name'][$i];
				$file_tmp_name[$i] = $_FILES['image']['tmp_name'][$i];
				$file_size[$i] = $_FILES['image']['size'][$i];

				if (!file_exists(save_path.$file_name[$i])) {
					move_uploaded_file($file_tmp_name[$i],save_path.$file_name[$i]);
				} else {
					'&lt;script type="text/javascript"&gt;'.
					'alert("File already exists");'.
					'&lt;/script&gt;';
				}
			}
		}
		$query = "INSERT INTO 테이블명 (칼럼1, 칼럼2, 칼럼3, 칼럼4) 
			VALUES ('$file_name[0]', '$file_name[1]', '$file_name[2]', '$file_name[3]')";

		$result=mysqli_query($query, $conn) or die(mysql_error());
		mysqli_close($conn);

		echo ("&lt;meta http-equiv='Refresh' content='1; URL=./write.php'&gt;");
	?>
			</code>
		</pre>
	</div>

	<h3><span>\</span> <b>R</b>ESULT</h3>
	<div id="bbslist">
	<?php
		$page_size=12;
		$page_list_size = 5;
		$no = $_GET[no];

		if (!$no || $no <0) $no=0;
		$query = "SELECT * FROM multipleimage ORDER BY id DESC LIMIT $no, $page_size";
		$result = mysqli_query($conn, $query);

		$result_count=mysqli_query($conn, "SELECT count(*) FROM multipleimage");
		$result_row=mysqli_fetch_row($result_count);
		$total_row = $result_row[0];

		if ($total_row <= 0) $total_row = 0;
		$total_page = ceil($total_row / $page_size);//1개면

		$current_page = ceil(($no+1)/$page_size);
	?>
	<table cellpadding=0 cellspacing=0 border=0>
		<tr>
			<th>&nbsp;ID&nbsp;</th>
			<th>&nbsp;FILE #1&nbsp;</th>
			<th>&nbsp;FILE #2&nbsp;</th>
			<th>&nbsp;FILE #3&nbsp;</th>
			<th>&nbsp;FILE #4&nbsp;</th>
		</tr>
		<?php while($row=mysqli_fetch_array($result)) {?>
		<tr>
			<td><?=$row["id"]?></td>
			<td><img src="./upload/<?=$row["image1"]?>" alt="<?=$row["image1"]?>" /></td>
			<td><img src="./upload/<?=$row["image2"]?>" alt="<?=$row["image2"]?>" /></td>
			<td><img src="./upload/<?=$row["image3"]?>" alt="<?=$row["image3"]?>" /></td>
			<td><img src="./upload/<?=$row["image4"]?>" alt="<?=$row["image4"]?>" /></td>
		</tr>
		<?php } mysqli_close($conn);?>
	</table>

	<style type="text/css">
	.wrap {font-size:15px;}
	#content .wrap h3 {letter-spacing:0;}
	#content .wrap h3 span::after {content:"\00a0";}
	.ex {width:100%; border:1px solid #ddd;}
	.ex dt,
	.ex dd {padding:6px 10px; line-height:1.8;}
	.ex dt {font-weight:bold; background:#eee;}
	.ex dd {}
	.ex dd b {color:#547DBF;}

	h3.ko {font-family:"LotteMartDream", sans-serif !important;}
	h3.ko span{font-family:"Roboto Condensed", sans-serif;}

	.code {margin-top:30px; font-size:14px;}
	#bbswrite {margin-top:30px; font-size:16px;}
	#bbslist {width:100%; margin:30px 0;}
	#bbswrite table,
	#bbslist table {border-collapse:collapse;}
	#bbswrite table th,
	#bbswrite table td,
	#bbslist table th,
	#bbslist table td {padding:5px; text-align:center; font-size:15px; border:1px solid #ddd;}
	#bbswrite table th,
	#bbslist table th {background:#F5F5F5;}
	#bbswrite input[type="submit"] {
	display: inline-block;
	padding: 10px 15px;
	vertical-align: top;
	text-decoration: none !important;
	line-height: 1;
	color: white !important;
	font-size: 18px;
	font-family: "Roboto Condensed", sans-serif;
	background: #547DBF;
	border: none !important;
	cursor: pointer;
	}
	#bbslist table td img {width:100%; vertical-align:middle;}
	</style>

	<?php } else {?>
	<script type="text/javascript">
	alert("열람 권한이 없습니다.");
	window.location.href="/";
	</script>
	<?php }?>
	</div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT']."/_layouts/_inc/bottom.php";?>
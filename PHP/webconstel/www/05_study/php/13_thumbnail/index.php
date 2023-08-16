<?php include $_SERVER['DOCUMENT_ROOT']."/_layouts/_inc/top.php";?>

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
	<h4>썸네일 만들기</h4>
	<br /><br /><br />

	<div id="intro">
	- [다운로드] <a href="./thumbnail.zip" download>thumbnail.zip</a><br />
	<br />
	<dl class="ex">
		<dt>썸네일을 만들어주는 PHP 코드</dt>
		<dd>첨부된 PHP를 다운로드받아 경로를 지정한다.<br />
		"<b>write_ok.php</b>" 파일에서 받아온 이미지를 정의한 뒤, inlcude해서 사용</dd>
	</dl>
	</div>

	<h3><span>\</span> <b>C</b>ODE</h3>
	<div class="code">
		<pre>
			<code class="language-php">	// 원본 이미지를 정의하는 코드
	$file_name = $_FILES['g_image']['name'];
	$g_image = addslashes($target.$file_name);
	$r = move_uploaded_file($_FILES['g_image']['tmp_name'], $g_image);

	// 썸네일을 생성하는 PHP를 호출
	include "./thumb.php";

	// 원하는 변수에 $thumFile을 지정
	$g_thumb = addslashes($thumFile);
	
	// query문 작성
	$query = "INSERT INTO DB명 ($g_image, $g_thumb) VALUES ('$g_image', '$g_thumb')";
		</code> <!--// html -->
		</pre>
	</div>
	<br /><br /><br />

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
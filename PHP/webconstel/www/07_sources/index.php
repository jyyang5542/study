<div class="wrap">
	<?php if (isset($_SESSION['admin_ID'])) {?>
	<h2><b><span>S</span>OURCES</b></h2>
	<h4>코딩할 때 주로 사용하는 소스 모음</h4>


	<h3><span>\</span> <b>프</b>로그램</h3>
	<ul class="list">
		<li><a href="#">EditPlus (Editor)</a></li>
		<li><a href="#">FileZilla (FTP)</a></li>
		<li><a href="https://visualstudio.microsoft.com/ko/" target="_blank">Microsoft Visual Studio (Editor)</a></li>
		<li><a href="http://www.iconico.com/colorpic/" target="_blank">ColorPic (Etc)</a></li>
		<div style="clear:both;"></div>
	</ul>

	<h3><span>\</span> <b>폰</b>트</h3>
	<ul class="list">
		<li><a href="https://fonts.google.com/" target="_blank">Google Fonts</a></li>
		<li><a href="https://noonnu.cc/" target="_blank">눈누 상업용 폰트</a></li>
		<li><a href="http://www.asiafont.com/" target="_blank">아시아 폰트</a></li>
		<div style="clear:both;"></div>
	</ul>
	<br /><br /><br />

	<style type="text/css">
	ul.list {margin-top:30px;}
	ul.list li {
	float:left;
	width:calc(50% - 40px);
	margin-left:20px;
	line-height:1.6;
	list-style-type:decimal; 
	list-style-position:outside; 
	font-size:18px;
	color:#333;
	}
	ul.list li:not(:last-of-type) {margin-bottom:20px;}
	ul.list li b {color:#333;}
	ul.list li a {color:#777; text-decoration:none !important;}
	ul.list li a:hover {color:#547DBF; font-weight:bold;}
	</style>


	<?php } else {?>
	<script type="text/javascript">
	alert("열람 권한이 없습니다.");
	window.location.href="/";
	</script>
	<?php }?>
</div>
<!doctype html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta name="Generator" content="EditPlus®">
<meta name="Author" content="">
<meta name="Keywords" content="">
<meta name="Description" content="">
<meta name="Viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
<link rel="stylesheet" type="text/css" href="./_inc/style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<title>NH Bank 벤치마킹</title>
</head>
<body>
<div id="notice">
	<div class="wrap">※ 본 페이지는 <a href="http://www.gdweb.co.kr/sub/view.asp?displayrow=24&Txt_key=&Txt_agnumber=&Txt_fgbn=5&Txt_bcode1=&Txt_gbflag=&Txt_bcode2=&Txt_bcode3=&Txt_bcode4=&Txt_bcode5=&Page=1&str_no=14855" target="_blank">농협인터넷뱅킹</a>의 디자인을 재구성한 벤치마킹 페이지입니다. <a class="close">X</a>
	</div>
</div> <!--// notice -->

<header>
	<div id="header_top">
		<div class="wrap">
			<h1><a href="./"><img src="./images/logo_new.jpg" alt="NH Bank" /></a></h1>
			<ul>
				<li>
					<p>
						<span class="on">개인</span>
						<span>큰글</span>
					</p>
				</li>
				<li><a href="#">기업</a></li>
				<li><a href="#">카드</a></li>
				<div class="clear"></div>
			</ul>
			<div class="clear"></div>

			<ul>
				<li>
					<select>
						<option name="">Language</option>
					</select>
				</li>
				<li><a href="#" class="favorite"><img src="./images/ico_favorite_off.gif" alt="즐겨찾기 추가" /></a></li>
				<li><a href="#" class="settings"><img src="./images/btn-set.png" alt="설정" /></a></li>
				<li><a href="#" class="search"><img src="./images/btn_header_search.gif" alt="검색" /></a></li>
				<div class="clear"></div>
			</ul>
			<div class="clear"></div>

			<p class="login_box">
				<a href="#">로그인</a>
				<a href="#">인증센터</a>
			</p> <!--// login_box -->

			<ul>
				<li><a href="#">외환</a></li>
				<li><a href="#">퇴직연금</a></li>
				<li><a href="#">보안센터</a></li>
				<li><a href="#">고객센터</a></li>
				<div class="clear"></div>
			</ul>
			<div class="clear"></div>
		</div>
	</div> <!--// header_top -->
	<div id="header_btm">
		<div class="wrap">
			<ul>
				<li><a href="#">조회</a></li>
				<li><a href="#">이체</a></li>
				<li><a href="#">공과금</a></li>
				<li><a href="#">뱅킹관리</a></li>
				<li><a href="#">라운지</a></li>
				<li><a href="#">금융상품몰</a></li>
				<li><a href="#">오픈뱅킹</a></li>
				<li><a href="#"><img src="./images/bg_all_menu.png" alt="메뉴" /></a></li>
				<div class="clear"></div>
			</ul>
		</div>
	</div> <!--// header_btm -->
</header>

<div id="bg"></div>

<div id="submenu">
	<div class="wrap">
		<?php include "./_inc/submenu.php";?>
	</div>
</div> <!--// submenu -->

<script type="text/javascript">
$(document).ready(function() {
	$('#notice .close').click(function() {
		$('#notice').stop().slideUp();
	});

	$('#header_btm ul li:not(:last-of-type) a').mouseenter(function() {
		var menuIdx = $(this).parent('li').index()+1;
		$('.submenu dl').hide();
		$('#bg, #submenu').show();
		$('.submenu dl:nth-of-type('+menuIdx+')').show();
	});

	$('#submenu').mouseleave(function() {
		$('#bg, #submenu, .submenu dl').hide();
	});
});
</script>
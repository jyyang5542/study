<!doctype html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta name="Generator" content="EditPlus®">
<meta name="Author" content="">
<meta name="Keywords" content="">
<meta name="Description" content="">
<link rel="stylesheet" type="text/css" href="./_css/layouts.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<title>Web Constel : 아성 다이소</title>
</head>
<body>
	<header>
		<div class="notice">
			<div class="wrap">
				※ 본 페이지는 아성 다이소 홈페이지(<a href="http://www.daiso.co.kr/" target="_blank">http://www.daiso.co.kr</a>)에 작성자의 개인적인 아이디어를 더한 벤치마킹 페이지입니다.
				<a href="#" class="close_notice">X</a>
				<div style="clear:both;"></div>
			</div>
		</div>
		<div id="gnb">
			<div class="wrap">
				<a href="#">KR</a>&nbsp;&nbsp;|&nbsp;
				<a href="#">EN</a>
			</div>
		</div> <!--// gnb -->
		<div id="menu">
			<div class="wrap">
				<h1><a href="./"><img src="http://www.daiso.co.kr/data/daisohome_data/images/main/site_logo.png" alt="아성 다이소" /></a></h1>
				<ul>
					<li><a href="#">다이소</a></li>
					<li><a href="#">상품</a></li>
					<li><a href="#">스토어</a></li>
					<li><a href="#">소식</a></li>
					<li><a href="#">가맹안내</a></li>
					<li><a href="#">입지제안</a></li>
					<li><a href="#">납품안내</a></li>
					<li><a href="#">고객서비스</a></li>
				</ul>
				<p class="quick">
					<a href="#"><img src="http://www.daiso.co.kr/data/daisohome_data/templet/ktsat/images/btns/membership_logo.png?02" alt="다이소 멤버쉽" /></a>
					<a href="#"><img src="http://www.daiso.co.kr/data/daisohome_data/templet/ktsat/images/btns/shop_logo.png" alt="DAISO MALL" /></a>
				</p>
				<div style="clear:both;"></div>
			</div>
		</div> <!--// menu -->
		<div id="submenu">
			<div class="wrap">
				<!--### 다이소 ###-->
				<p class="menu1" style="text-align:center;">
					<a href="#">CEO인사말</a>
					<a href="#">회사연혁</a>
					<a href="#">다이소의 가치</a>
					<a href="#">다이소의 비전</a>
					<a href="#">사업현황</a>
					<a href="#">물류센터</a>
					<a href="#">관계사</a>
					<a href="#">동반성장</a>
					<a href="#">찾아오시는 길</a>
				</p>
				<!--### 상품 ###-->
				<p class="menu2" style="text-align:left; padding-left:260px;">
					<a href="#">취급 품목</a>
					<a href="#">신상품</a>
					<a href="#">핫 이슈 상품</a>
				</p>
				<!--### 스토어 ###-->
				<p class="menu3" style="text-align:left; padding-left:334px;">
					<a href="#">매장검색</a>
				</p>
				<!--### 소식 ###-->
				<p class="menu4"  style="text-align:center;">
					<a href="#">뉴스 및 공지사항</a>
					<a href="#">인재채용</a>
				</p>
				<!--### 가맹안내 ###-->
				<p class="menu5"  style="text-align:center;">
					<a href="#">가맹점 개설 요건 및 절차</a>
					<a href="#">가맹점 개설 상담</a>
				</p>
				<!--### 입지제안 ###-->
				<p class="menu6"  style="text-align:center;">
					<a href="#">직영점 입지제안</a>
				</p>
				<!--### 납품안내 ###-->
				<p class="menu7"  style="text-align:right; padding-right:378px;">
					<a href="#">납품상담</a>
				</p>
				<!--### 고객서비스 ###-->
				<p class="menu8"  style="text-align:right; padding-right:260px;">
					<a href="#">고객의 소리</a>
					<a href="#">FAQ</a>
				</p>
			</div>
		</div> <!--// submenu -->
	</header>

	<script type="text/javascript">
	$(document).ready(function() {
		// 공지사항 감추기
		$('a.close_notice').click(function() {
			$('header .notice').slideUp();
		});

		// 서브메뉴 보이기 및 숨기기
		$('#submenu').hide();
		$('#menu ul li a').mouseenter(function() {
			$('#submenu').stop().slideDown();
			var menu_idx = $(this).parent('li').index()+1;
			$('#submenu p').hide();
			$('#submenu p.menu'+menu_idx).show();
		});
		$('header').mouseleave(function() {
			$('#submenu').stop().slideUp();
		});
	});
	</script>
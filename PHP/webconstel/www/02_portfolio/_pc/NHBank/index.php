<?php include "./_inc/top.php";?>

<div id="main">
	<div id="cont1">
		<div class="cont1_bg"></div>
		<div class="cont1_bg"></div>
		<div class="wrap">
			<div id="cont1_left">
				<h2>피어나는 꽃처럼<br /><span>행복과 함께</span>하는<br />봄날 되세요.</h2>
			</div> <!--// cont1_left -->
			<div id="cont1_right">
				<ul class="slide">
					<li><a href="#"><img src="./images/cont1_01.png" /></a></li>
					<li><a href="#"><img src="./images/cont1_02.png" /></a></li>
					<li><a href="#"><img src="./images/cont1_03.png" /></a></li>
					<li><a href="#"><img src="./images/cont1_04.png" /></a></li>
					<div class="clear"></div>
				</ul> <!--// slide -->
			</div> <!--// cont1_right -->
			<div id="cont1_right_control">
				<span class="play"></span>
			</div> <!--// cont1_right_control -->
		</div>
	</div> <!--// cont1 -->

	<script type="text/javascript">
	$(document).ready(function() {
		$('#cont1_right ul').css('width', $('#cont1_right ul li').length*628+"px");
		for (var i=$('ul.slide li').length; i>=1; i--) {$('#cont1_right_control').prepend('<a>'+i+'</a>');}
		$('#cont1_right_control a:first-of-type').addClass("on");

		var n = 0;
		var maxLeng = $('ul.slide li').length;
		function myRoll() {
			n++;
			$('ul.slide').stop().animate({marginLeft:-628*n}, 600);
			$('#cont1_right_control a').removeClass("on");
			$('#cont1_right_control a:nth-of-type('+(n+1)+')').addClass("on");
			if (n>maxLeng-2) {n=-1;}
		}
		var rolling = setInterval(myRoll, 3000);

		function play() {
			clearInterval(rolling);
			$(this).removeClass("play");
			$(this).addClass("stop");
			$(this).one("click", stop);
		}
		function stop() {
			clearInterval(rolling);
			$(this).removeClass("stop");
			$(this).addClass("play");
			rolling = setInterval(myRoll, 3000);
			$(this).one("click", play);
		}

		$('#cont1_right_control a').click(function() {
			clearInterval(rolling);
			$('#cont1_right_control span').removeClass("play");
			$('#cont1_right_control span').addClass("stop");
			$('.stop').one("click", stop);
			$('#cont1_right_control a').removeClass("on");
			var idx = $(this).index();
			n = idx;
			$(this).addClass("on");
			$('ul.slide').stop().animate({marginLeft:-628*n}, 600);
		});

		$('.play').one("click", play);
		$('.stop').one("click", stop);
	});
	</script>

	<div id="menus">
		<div class="wrap">
			<ul>
				<li><a href="#">큰글뱅킹</a></li>
				<li><a href="#">거래내역</a></li>
				<li><a href="#">즉시이체</a></li>
				<li><a href="#">계좌조회</a></li>
				<li><a href="#">예금가입</a></li>
				<li><a href="#">펀드가입</a></li>
				<li><a href="#">대출가입</a></li>
				<li><a href="#">빠른조회</a></li>
				<div class="clear"></div>
			</ul>
		</div>
	</div>

	<div id="cont2">
		<div class="wrap">
			<h2>NH Bank와 함께!</h2>
			<ul class="tab">
				<li><a class="on">전체</a></li>
				<li><a>이벤트만 보기</a></li>
				<li><a>상품만 보기</a></li>
				<div class="clear"></div>
			</ul>
			<ul class="images">
				<li><a href="#"><img src="./images/cont2_01.jpg" alt="01" /></a></li>
				<li><a href="#"><img src="./images/cont2_02.jpg" alt="02" /></a></li>
				<li><a href="#"><img src="./images/cont2_03.jpg" alt="03" /></a></li>
				<li><a href="#"><img src="./images/cont2_04.jpg" alt="04" /></a></li>
				<li><a href="#"><img src="./images/cont2_05.jpg" alt="05" /></a></li>
				<li><a href="#"><img src="./images/cont2_06.jpg" alt="06" /></a></li>
				<div class="clear"></div>
			</ul>
		</div>
	</div> <!--// cont2 -->

	<script type="text/javascript">
	$(document).ready(function() {
		$('#cont2 .tab li a').click(function() {
			$('#cont2 .tab li a').removeClass("on");
			$(this).addClass("on");
			switch ($(this).parent('li').index()) {
			case 0 :
				$('#cont2 .images li').css('margin', '').hide().show();
				break;
			case 1 :
				$('#cont2 .images li').hide();
				$('#cont2 .images li:nth-of-type(1), #cont2 .images li:nth-of-type(3), #cont2 .images li:nth-of-type(5)').show();
				$('#cont2 .images li:nth-of-type(3)').css('margin-right', '25px');
				$('#cont2 .images li:nth-of-type(5)').css('margin', 0);
				break;
			case 2 :
				$('#cont2 .images li').hide();
				$('#cont2 .images li:nth-of-type(2), #cont2 .images li:nth-of-type(4), #cont2 .images li:nth-of-type(6)').show();
				break;
			default :
				$('#cont2 .images li').css('margin', '').hide().show();
				break;
			}
		});
	});
	</script>

	<div id="cont3">
		<div class="wrap">
			<table cellpadding=0 cellspacing=0 border=0 id="cont3_left">
				<tr>
					<th><a href="#">새 소식</a></th>
					<th><a href="#">보안소식</a></th>
				</tr>
				<tr>
					<td>
						<ul>
							<li><a href="#">「NH-ONE 해외송금서비스 이용안내」 어쩌구 저쩌구</a><span class="new">N</span></li>
							<li><a href="#">수신상품 5종 특별약관 변경 안내</a></li>
							<li><a href="#">NH농협은행 본페이지가 아닙니다</a></li>
						</ul>
					</td>
					<td>
						<ul>
							<li><a href="#">NH농협은행 본페이지가 아닙니다</a><span class="new">N</span></li>
							<li><a href="#">NH농협은행 본페이지가 아닙니다</a></li>
							<li><a href="#">NH농협은행 본페이지가 아닙니다</a></li>
						</ul>
					</td>
				</tr>
				<tr>
					<td class="border" id="b1"><a href="#">서식약관자료실</a></td>
					<td class="border" id="b2"><a href="#">서민금융</a></td>
				</tr>
				<tr>
					<td class="border" id="b3"><a href="#">상품공시실(은행)</a></td>
					<td class="border" id="b4"><a href="#">상품공시실(농축협)</a></td>
				</tr>
			</table> <!--// cont3_left -->
			<div id="cont3_right">
				<ul>
					<li class="hidden"><a href="#">보안서비스</a></li>
					<li><a href="#">금융소비자보호</a></li>
					<li><a href="#">주택도시기금</a></li>
					<li><a href="#">에스크로</a></li>
				</ul>
			</div> <!--// cont3_right -->
			<div class="clear"></div>
		</div>
	</div> <!--// cont3 -->
</div> <!--// main -->

<?php include "./_inc/bottom.php";?>
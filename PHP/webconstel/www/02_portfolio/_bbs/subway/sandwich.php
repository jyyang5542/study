<?php include './_inc/top.php';?>

<script type="text/javascript" src="./_js/sub.js"></script>
<div id="content">
	<div id="nav">
		<div class="wrap">
			<ul>
				<li><a href="#" class="on">써브웨이 이용방법</a><span>ㆍ</span></li>
				<li><a href="#">단체메뉴 이용방법</a></li>
			</ul>
		</div>
	</div> <!--// nav -->

	<div id="title">
		<div class="wrap">
			<h2>써브웨이 이용방법</h2>
			<table cellpadding=0 cellspacing=0 border=0 id="tab">
				<tr>
					<td><a href="#">매장에서 주문하기</a></td>
					<td><a href="#">주문 TIP</a></td>
					<td class="on"><a href="#">내 메뉴</a></td>
				</tr>
			</table>
		</div>
	</div> <!--// title -->

	<div id="cont">
		<div class="wrap">
			<ul class="step">
				<li class="on"><div>STEP<b>1</b></div><span>&nbsp;ㆍㆍㆍ</span></li>
				<li><div>STEP<b>2</b></div><span>&nbsp;ㆍㆍㆍ</span></li>
				<li><div>STEP<b>3</b></div><span>&nbsp;ㆍㆍㆍ</span></li>
				<li><div>STEP<b>4</b></div><span>&nbsp;ㆍㆍㆍ</span></li>
				<li><div>STEP<b>5</b></div></li>
			</ul>

			<form action="write_ok.php" method="post">
				<div class="step">
					<div class="btns1">
						<a class="prev1">PREV</a>
						<a class="next1">NEXT</a>
					</div>
					<img src="./images/img_store_order01.png" class="stepImg" alt="STEP 1" />
					<?php
						include "./step1.php";
						include "./step2.php";
						include "./step3.php";
						include "./step4.php";
						include "./step5.php";
					?>
					<br /><br />
					<div class="btns2">
						<a href="#" class="prev2" style="float:left;">&lt; 이전 단계</a>
						<a href="#" class="next2" style="float:right;">다음 단계 &gt;</a>
						<input type="submit" class="submit" value="선택 완료" style="float:right; display:none;" />
						<div style="clear:both;"></div>
					</div>
				</div>
			</form>
		</div>
	</div> <!--// cont -->
</div> <!--// content -->

<script type="text/javascript">
$(function() {
	$('div.select').hide();
	$('#select1').show();

	var n = 1;

	$('a.prev1, a.prev2').click(function() {
		n--;
		$('.stepImg').attr('src', './images/img_store_order0'+n+'.png');
		$('.stepImg').attr('alt', 'STEP '+n);
		$('div.select').hide();
		$('#select'+n).show();
		$('ul.step li:nth-of-type('+(n+1)+')').removeClass("on");
		$('ul.step li:nth-of-type('+n+')').removeClass("done").addClass("on");
		if (n < 5) {
			$('a.next1, a.next2').show();
			$('.submit').hide();
		}
		if (n < 1) {
			n = 1;
			alert("제일 처음 단계입니다!");
			$('.stepImg').attr('src', './images/img_store_order0'+n+'.png');
			$('.stepImg').attr('alt', 'STEP '+n);
			$('div.select').hide();
			$('#select'+n).show();
			$('ul.step li:nth-of-type('+n+')').addClass("on");
		}
	});

	$('a.next1, a.next2').click(function() {
		n++;
		$('.stepImg').attr('src', './images/img_store_order0'+n+'.png');
		$('.stepImg').attr('alt', 'STEP '+n);
		$('div.select').hide();
		$('#select'+n).show();
		$('ul.step li:nth-of-type('+(n-1)+')').removeClass("on").addClass("done");
		$('ul.step li:nth-of-type('+n+')').addClass("on");
		if (n == 5) {
			$('a.next1, a.next2').hide();
			$('.submit').show();
		}
	});
});
</script>

<?php include './_inc/bottom.php';?>
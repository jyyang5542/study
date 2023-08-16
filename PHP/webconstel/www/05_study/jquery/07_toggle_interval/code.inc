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
		var rolling = setInterval(myRoll, 2000);

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
			rolling = setInterval(myRoll, 2000);
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
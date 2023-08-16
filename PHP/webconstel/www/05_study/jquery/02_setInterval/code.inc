	<script type="text/javascript">
	$(function() {
		var n = 1;
		var maxLeng = $('#slide .slide').length;

		rolling = setInterval(function() {
			n++;
			$('#slide .slide').fadeOut();
			$('#slide #slide'+n).fadeIn();

			if (n >= maxLeng) {n = 0;}
		}, 3000);

		$('.clear').click(function() {
			clearInterval(rolling);
		});
	});
	</script>
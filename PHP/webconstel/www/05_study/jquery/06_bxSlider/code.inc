	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

	<div id="result">
		<div><p class="slick" id="slick1">Slide #1</p></div>
		<div><p class="slick" id="slick2">Slide #2</p></div>
		<div><p class="slick" id="slick3">Slide #3</p></div>
	</div>

	<script type="text/javascript">
	$(function() {
		$('#result').bxSlider({
			auto: true,
			pause: 4000,
			autoStart: true,
			autoHover: true
		});
	});
	</script>
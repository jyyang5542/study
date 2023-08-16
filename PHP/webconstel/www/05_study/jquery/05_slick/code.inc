	<link rel="stylesheet" type="text/css" href="./slick.css">
	<link rel="stylesheet" type="text/css" href="./slick-theme.css">
	<script type="text/javascript" src="./slick.min.js"></script>

	<div id="result">
		<div><p class="slick" id="slick1">Slide #1</p></div>
		<div><p class="slick" id="slick2">Slide #2</p></div>
		<div><p class="slick" id="slick3">Slide #3</p></div>
	</div>

	<script type="text/javascript">
	$(function() {
		$('#result').slick({
			dots: true,
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			adaptiveHeight: true,
			autoplay: true,
			autoplaySpeed:2000
		});
	});
	</script>
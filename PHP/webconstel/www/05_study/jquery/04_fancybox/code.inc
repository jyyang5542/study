	<link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>

	<a data-fancybox="gallery" href="./original1.jpg" class="sample">
		<img src="./thum1.jpg" title="샘플1"></a>
	<a data-fancybox="gallery" href="./original2.jpg" class="sample">
		<img src="./thum2.jpg" title="샘플1"></a>
	<a data-fancybox="gallery" href="./original3.jpg" class="sample">
		<img src="./thum3.jpg" title="샘플1"></a>

	<script type="text/javascript">
	$(function() {
		$('.sample').fancybox();
	});
	</script>
	<script type="text/javascript">
	$(function() {
		// 샘플 텍스트 1을 눌렀을 때
		function handler1() {
			$('dl.ex dd').html("<b>샘플 2</b> : 내 텍스트 2");
			$(this).text("샘플 1 출력");
			$(this).one("click", handler2);
		}
		// 샘플 텍스트 2를 눌렀을 때
		function handler2() {
			$('dl.ex dd').html("<b>샘플 1</b> : 내 텍스트 1");
			$(this).text("샘플 2 출력");
			$(this).one("click", handler1);
		}
	 
		// 버튼을 눌렀을 때
		$('#result button').one("click", handler1);
	});
	</script>
<meta charset="utf-8" />
<?php
	// 로그 파일 생성
	// 보통은 이 과정을 외부파일로 include 시켜 하는 것 같다.
	
	if(isset($_POST['name']) && isset($_POST['text'])) {
		date_default_timezone_set('Asia/Seoul');
		$today = date("Y-m-d"); // Y.m.d 등 출력하는 양식
		$time = date("H:i"); // 초까지 나타내려면 H:i:s
		$data = $today.' / '.$time.' / ' . $_POST['name'] .' / '. $_POST['text']."\n";
		$ret = file_put_contents('./log.inc', $data, FILE_APPEND | LOCK_EX);
	 
		if($ret === false) {die('메세지 전송에 실패했습니다.');}
		else {
			echo '<script>alert("메세지가 전송되었습니다!");</script>';
			echo '<script>history.back(-1);</script>';
			// 입력한 정보를 다시 사용하지 않기 위해 현재 페이지로 다시 redirect
		}
	}
	exit();
?>
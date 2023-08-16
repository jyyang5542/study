<meta charset="utf-8" />
<?php
	if(!isset($_POST['admin_ID']) || !isset($_POST['admin_PW'])) exit;

	$user_id = $_POST['admin_ID'];
	$user_pw = $_POST['admin_PW'];

	$members = [
		'admin'=>['pw'=>'Isolated@11687', 'name'=>'관리자']
	]; 

	if(!isset($members[$user_id])) {
		echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";
		exit;
	}
	if($members[$user_id]['pw'] != $user_pw) {
		echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";
		exit;
	}
	session_start();
	$_SESSION['admin_ID'] = $user_id;
	$_SESSION['admin_PW'] = $members[$user_id]['name'];
?>
<meta http-equiv='refresh' content='0;url=index.php'>
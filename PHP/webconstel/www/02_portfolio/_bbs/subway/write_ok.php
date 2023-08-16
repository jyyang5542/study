<meta charset="utf-8" />
<?php
	$length = $_POST['length'];
	$option1 = $_POST['option1'];
	$option2 = $_POST['option2'];
	$option3 = $_POST['option3'];
	$option4 =join(', ', $_POST['option4']);
	$option5 = $_POST['option5'];
	$option6 = $_POST['option6'];

	$txt = $length.' || '.$option1.' || '.$option2.' || '.$option3.' || '. $option4.' || '.$option5.' || '.$option6;
?>

<script type="text/javascript">window.location.href="./sandwich.php";</script>
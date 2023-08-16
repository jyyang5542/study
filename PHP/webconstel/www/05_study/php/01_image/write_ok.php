<?php
	include $_SERVER['DOCUMENT_ROOT']."/_layouts/_inc/db_info.php";

	$id = $_GET["id"];

	define("save_path", "upload/");
	for($i=0; $i<=count($_FILES['image']['name']); $i++) {
		if( $_FILES['image']['size'][$i] && !$_FILES['image']['error'][$i] ) {

			$file_name[$i] = $_FILES['image']['name'][$i];
			$file_tmp_name[$i] = $_FILES['image']['tmp_name'][$i];
			$file_size[$i] = $_FILES['image']['size'][$i];

			if (!file_exists(save_path.$file_name[$i])) {
				move_uploaded_file($file_tmp_name[$i],save_path.$file_name[$i]);
			} else {
				'<script type="text/javascript">alert("File already exists");</script>';
			}
		}
	}

	$query = "INSERT INTO multipleimage (image1, image2, image3, image4) VALUES ('$file_name[0]', '$file_name[1]', '$file_name[2]', '$file_name[3]')";


	$result=mysqli_query($conn, $query) or die(mysqli_error());
	mysqli_close($conn);

	echo ("<meta http-equiv='Refresh' content='1; URL=./write.php'>");
?>

<script type="text/javascript">
alert("정상적으로 저장되었습니다.");
window.location.href = "./write.php";
</script>
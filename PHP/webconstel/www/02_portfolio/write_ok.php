<meta charset="utf-8" />
<?php
	include $_SERVER['DOCUMENT_ROOT']."/_layouts/_inc/db_info.php";

	##### 업로드된 이미지 처리 #####
	define("save_path", "images/");

	// 썸네일
	$thumb_name = $_FILES['thumbnail']['name'];
	$thumb_tmp_name = $_FILES['thumbnail']['tmp_name'];

	if (!file_exists(save_path.$thumb_name)) {
		move_uploaded_file($thumb_tmp_name,save_path.$thumb_name);
	} 

	// 썸네일 외 이미지
	for($i=0; $i<=count($_FILES['image']['name']); $i++) {
		if( $_FILES['image']['size'][$i] && !$_FILES['image']['error'][$i] ) {

			$image_name[$i] = $_FILES['image']['name'][$i];
			$image_tmp_name[$i] = $_FILES['image']['tmp_name'][$i];

			if (!file_exists(save_path.$image_name[$i])) {
				move_uploaded_file($image_tmp_name[$i],save_path.$image_name[$i]);
			} else {
				'<script type="text/javascript">alert("파일이 이미 존재합니다.");</script>';
			}
		}
	}

	// 썸네일
	$thumbnail = "/02_portfolio/images/".$thumb_name;

	// 타이틀
	$title = addslashes($_POST["title"]);

	// 벤치마크 여부
	$venchmark = $_POST['venchmark'];

	// 해쉬태그
	$hashtag = addslashes($_POST["hashtag"]);

	// 카테고리
	$category = implode("/", $_POST['category']);

	// PC 링크
	$_POST['link_pc']==null ? $link_pc=NULL : $link_pc=$_POST['link_pc'];

	// MOBILE 링크
	$_POST['link_mobile']==null ? $link_mobile=NULL : $link_mobile=$_POST['link_mobile'];

	// 반응형 링크
	$_POST['link_responsive']==null ? $link_responsive=NULL : $link_responsive=$_POST['link_responsive'];

	// 이미지 1
	isset($image_name[0]) ? $image_1="/02_portfolio/images/".$image_name[0] : $image_1=NULL;

	// 이미지 2
	isset($image_name[1]) ? $image_2="/02_portfolio/images/".$image_name[1] : $image_2=NULL;

	// 이미지 3
	isset($image_name[2]) ? $image_3="/02_portfolio/images/".$image_name[2] : $image_3=NULL;

	// 포트폴리오 설명
	$description = addslashes($_POST['description']);

	// 작업툴
	$tools = implode(",<br />", $_POST['tools']);
	
	// 작업스킬
	$skills = implode(",<br />", $_POST['skills']);

	// 작업기간
	$duration = addslashes($_POST['duration']);

	// 작업인원
	$members = $_POST['members']." 명";


	$query = 
	"INSERT INTO portfolio (thumbnail, title, venchmark, hashtag, category, link_pc, link_mobile, link_responsive, image_1, image_2, image_3, description, tools, skills, duration, members)
	VALUES ('$thumbnail', '$title', '$venchmark', '$hashtag', '$category', '$link_pc', '$link_mobile', '$link_responsive', '$image_1', '$image_2', '$image_3', '$description', '$tools', '$skills', '$duration', '$members')";

	$result=mysqli_query($conn, $query) or die(mysqli_error());

	mysqli_close($conn);

	echo ("<meta http-equiv='Refresh' content='1; URL=/?menu=portfolio&mod=write'>");
?>

<script type="text/javascript">
alert("정상적으로 저장되었습니다.");
window.location.href = "/?menu=portfolio";
</script>
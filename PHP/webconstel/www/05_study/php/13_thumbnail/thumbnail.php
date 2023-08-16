<?php
	function thumbnail($file, $save_filename, $max_width, $max_height) {
		if(pathinfo($file)['extension']=="jpg" || pathinfo($file)['extension']=="JPG" || pathinfo($file)['extension']=="jpeg" || pathinfo($file)['extension']=="JPEG") {
			$src_img = ImageCreateFromJPEG($file); //JPG파일로부터 이미지를 읽어옵니다
		}
		if(pathinfo($file)['extension']=="png" || pathinfo($file)['extension']=="PNG") {
			$src_img = ImageCreateFromPNG($file); //PNG파일로부터 이미지를 읽어옵니다
		}
		if(pathinfo($file)['extension']=="gif" || pathinfo($file)['extension']=="GIF") {
			$src_img = ImageCreateFromGIF($file); //GIF파일로부터 이미지를 읽어옵니다
		}
		$img_info = getImageSize($file); //원본이미지의 정보를 얻어옵니다
		$img_width = $img_info[0];
		$img_height = $img_info[1];

		if(($img_width/$max_width) == ($img_height/$max_height)) { //원본과 썸네일의 가로세로비율이 같은경우
			$dst_width=$max_width;
			$dst_height=$max_height;
		} elseif(($img_width/$max_width) < ($img_height/$max_height)) { //세로에 기준을 둔경우
			$dst_width=$max_height*($img_width/$img_height);
			$dst_height=$max_height;
		} else { //가로에 기준을 둔경우
			$dst_width=$max_width;
			$dst_height=$max_width*($img_height/$img_width);
		} //그림사이즈를 비교해 원하는 썸네일 크기이하로 가로세로 크기를 설정합니다.

		$dst_img = imagecreatetruecolor($dst_width, $dst_height); //타겟이미지를 생성합니다

		ImageCopyResized($dst_img, $src_img, 0, 0, 0, 0, $dst_width, $dst_height, $img_width, $img_height); //타겟이미지에 원하는 사이즈의 이미지를 저장합니다

		ImageInterlace($dst_img);
		ImagePNG($dst_img, $save_filename); //실제로 이미지파일을 생성합니다
		ImageDestroy($dst_img);
		ImageDestroy($src_img);
	}

	$srcFile = $g_image; // 원본 이미지 파일
	$thumFile = $target.pathinfo($g_image)['filename'].'_thum.png'; // 타겟 이미지 파일

	thumbnail($srcFile, $thumFile, "200", "200");
?>
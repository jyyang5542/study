<?php
if(isset($_POST['sendFrom'])) {

$to = "jyyang5542@gmail.com";
$from = $_POST['sendFrom'];

$charset='UTF-8'; // 문자셋 : UTF-8
$subject = $_POST['sendSubject'];
$encoded_subject = "=?".$charset."?B?".base64_encode($subject)."?=\n";
$message = $_POST['sendMsg'];
$encoded_message = ''.
	'<html><body><meta charset="utf-8" /><pre style="white-space:pre-wrap;">'.$message.'</pre></body></html>';

// 헤더 설정
$headers="MIME-Version: 1.0\n".
"Content-Type: text/html; charset=".$charset."; format=flowed\n".
"From: ".$from."\n".
"Content-Transfer-Encoding: 8bit\n";

// 받는 사람에게 메일
mail($to, $encoded_subject, $encoded_message, $headers);

echo '<script>alert("Your message has been sent.");</script>';
echo '<script>window.location.href = "/03_contact/contact.php";</script>';
}
?>
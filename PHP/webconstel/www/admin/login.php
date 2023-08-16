<?php include "../_layouts/_inc/top.php";?>

<div class="wrap">
	<h2><b><span>L</span>OGIN</b></h2>

	<h3><span>\</span> 관리자로 <b>로그인</b></h3>
	<form method="post" action="./login_ok.php" id="login">
		<table cellpadding=0 cellspacing=0 border=0>
			<tr>
				<th><span>A</span>DMIN ID</th>
				<td><input type="text" name="admin_ID" maxlength="20" /></td>
			</tr>
			<tr>
				<th><span>P</span>ASSWORD</th>
				<td><input type="password" name="admin_PW" maxlength="20" /></td>
			</tr>
			<tr>
				<td colspan=2><input type="submit" value="LOGIN" /></td>
			</tr>
		</table>
	</form>
</div>

<style type="text/css">
#login {width:100%; padding:50px 0; margin:40px 0;}
#login table {width:420px; margin:20px auto;}
#login table th,
#login table td {height:53px; line-height:48px; text-align:left;}
#login table th {
	width:100px; 
	color:#333 !important; 
	font-size:22px !important; 
	font-family:"Roboto Condensed", sans-serif;
}
#login table th span {color:#547DBF;}
#login table td {width:240px;}
#login table td input {vertical-align:middle; width:100%;}
#login table td input[type="text"],
#login table td input[type="password"] {
	display:inline-block;
	width:288px; 
	height:40px; 
	margin-left:30px;
	font-size:16px; 
	border:1px solid #ccc;
}
#login table td input[type="submit"] {
	height:50px;
	margin-top:20px;
	font-size:24px;
	font-weight:bold;
	font-family:"Roboto Condensed", sans-serif;
	color:white;
	background:#547DBF;
	border:none;
	border-radius:25px;
	cursor:pointer;
}
</style>

<?php include "../_layouts/_inc/bottom.php";?>
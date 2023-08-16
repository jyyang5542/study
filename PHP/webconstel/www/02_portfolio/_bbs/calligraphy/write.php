<?php
	$url = '/02_portfolio/_bbs/calligraphy';

	include $_SERVER['DOCUMENT_ROOT'].$url."/en/_inc/top.php";
?>

<link rel="stylesheet" type="text/css" href="./_css/fonts_en.css" />
<link rel="stylesheet" type="text/css" href="./_css/fonts_ko.css" />

<div id="contents" align="center">
	<?php if (isset($_SESSION['admin_ID'])) {?>
	<div id="bbswrite">
		<h2 align="left">SUBMIT QUOTE</h2>
		<form action="<?php echo $url;?>/write_ok.php" method="post">
			<table cellpadding=0 cellspacing=0 border=0>
				<colgroup>
					<col width="15%" />
					<col width="35%" />
					<col width="15%" />
					<col width="35%" />
				</colgroup>
				<tr>
					<th>Language</th>
					<td>
						<select name="language">
							<option value="">----------------</option>
							<option value="Korean">Korean</option>
							<option value="English">English</option>
						</select>
					</td>
					<th style="border-bottom:1px solid #222;">Category</th>
					<td>
						<select name="category">
							<option value="">----------------</option>
							<option value="word">word</option>
							<option value="sentence">sentence</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>Quote</th>
					<td colspan=3><textarea name="quote" placeholder="Quote"></textarea></td>
				</tr>
				<tr>
					<th>Author</th>
					<td><input type="text" name="author" placeholder="Author's name" /></td>
					<th>Source</th>
					<td><input type="text" name="source" placeholder="Book name, Article title, etc." /></td>
				</tr>
				<tr>
					<th>Date</th>
					<td>
						<input type="text" name="date[]" placeholder="DD" maxlength="2" />
						<input type="text" name="date[]" placeholder="MM" maxlength="2" />
						<input type="text" name="date[]" placeholder="YYYY" maxlength="4" style="width:100px;" />
					</td>
					<th style="border-bottom:1px solid #222;">Font</th>
					<td class="font">
						<label style='font-family:"Harlott";'><input type="radio" name="font" value="Harlott" /> Harlott</label><br />
						<label style='font-family:"Roboto Condensed";'><input type="radio" name="font" value="Roboto Condensed" /> Roboto Condensed</label><br />
						<label style='font-family:"Nanum Brush Script";'><input type="radio" name="font" value="Nanum Brush Script" /> Nanum Brush Script</label>
					</td>
				</tr>
				<tr>
					<th>Behind Story</th>
					<td colspan=3><textarea name="story" placeholder="Behind story"></textarea></td>
				</tr>
			</table>
			<input type="submit" value="SUBMIT" />
			<div style="clear:both;"></div>
		</form>
	</div>
	<?php } else {?>
	<div id="bbswrite"><br />Access denied.</div>
	<?php }?>

	<style type="text/css">
	#bbswrite {width:1080px; margin:0 auto; font-size:16px;}
	#bbswrite h2 {margin-bottom:5px; font-size:28px;}
	#bbswrite table {width:100%; border-collapse:collapse;}
	#bbswrite table th,
	#bbswrite table td {padding:10px 15px;}
	#bbswrite table th {font-size:18px; color:white; background:#222; border:1px solid #222;}
	#bbswrite table tr:not(:last-of-type) th {border-bottom:1px solid white;}
	#bbswrite table td {font-size:16px; border:1px solid #222;}
	#bbswrite table td.font {font-size:18px;}
	#bbswrite table td select {width:300px; height:40px; font-size:16px;}
	#bbswrite table td textarea {width:99%; min-height:80px; font-size:16px; resize:vertical;}
	#bbswrite table td input[name="author"],
	#bbswrite table td input[name="source"] {width:90%; height:40px; font-size:16px;}
	#bbswrite table td input[name="date[]"] {width:50px; height:40px; font-size:16px;}
	#bbswrite input[type="submit"] {
		float:right;
		padding:10px 30px;
		margin-top:30px;
		color:white;
		font-size:18px;
		font-weight:bold;
		background:#222;
		border:none;
		cursor:pointer;
	}
	</style>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'].$url."/en/_inc/bottom.php";?>
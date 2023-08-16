<?php include $_SERVER['DOCUMENT_ROOT']."/_layouts/_inc/top.php";?>

<!--### 코드로 표현하는 플러그인 ###-->
<link rel="stylesheet" type="text/css" href="/_layouts/js/highlight/styles/default.css" />
<script type="text/javascript" src="/_layouts/js/highlight/highlight.pack.js"></script>
<script type="text/javascript" src="/_layouts/js/highlight/highlightjs-line-numbers.min.js"></script>
<script>
	hljs.initHighlightingOnLoad();
	hljs.initLineNumbersOnLoad();
</script>

<div class="wrap">
	<?php if (isset($_SESSION['admin_ID'])) {?>
	<h2><b><span>S</span>TUDY / PHP</b></h2>
	<h4>게시판 샘플(DB 형식)</h4>
	<br /><br /><br />

	<div id="intro">
		<dl class="ex">
			<dt>※ 통합 다운로드 링크는 막았다. 그냥 여기있는 내용을 복사 붙여넣기 하는 것을 추천.</dt>
			<dd>
				게시판은 크게 글 <b>작성</b>, <b>조회</b>, <b>수정</b>, <b>삭제</b>의 4단계로 이루어진다.<br />
				댓글 등의 심화 내용은 추후 추가 예정.
			</dd>
		</dl>
	</div>

	<h3><span>\</span> <b>C</b>ODE - db_info.php</h3>
	<a href="#code-db" class="btn">&gt; Show / Hide</a>
	<div class="code" id="code-db">
		<pre>
		<code class="language-php">	&lt;meta charset="utf-8" /&gt;
	&lt;?php
		$conn = mysqli_connect("localhost", "DB명", "비밀번호");
		mysqli_select_db($conn, "DB명");
		mysqli_set_charset('utf8');
	?&gt;
		</code>
		</pre>
	</div>

	<h3><span>\</span> <b>C</b>ODE - list.php</h3>
	<a href="#code-list" class="btn">&gt; Show / Hide</a>
	<div class="code" id="code-list">
		<pre>
		<code class="language-php">	// ################### 초기 셋팅 ################### //
	&lt;?php
		include "./db_info.php";

		# LIST 설정
		# 1. 한 페이지에 보여질 게시물의 수
		$page_size=20;

		# 2. 페이지 나누기에 표시될 페이지의 수
		// $no는 페이지가 시작되는 첫 글의 순번이다.
		$page_list_size = 5;
		$no = $_GET["no"];
		if (!$no || $no&lt;0) $no=0;

		// 데이터베이스에서 페이지의 첫번째 글($no)부터 
		// $page_size 만큼의 글을 가져온다.
		$query = "SELECT * FROM 테이블명 ORDER BY id DESC LIMIT $no, $page_size";
		$result = mysqli_query($conn, $query);

		// 총 게시물 수 를 구한다.
		$result_count=mysqli_query($conn, "SELECT count(*) FROM 테이블명");
		$result_row=mysqli_fetch_row($result_count);
		$total_row = $result_row[0];
		//결과의 첫번째 열이 count(*) 의 결과다.
		//mysqli_fetch_row 쓰면 $result_row[0] 처럼 숫자를 써서 접근을 해야한다. 

		# 총 페이지 계산
		# ceil는 올림이다. 
		if ($total_row &lt;= 0) $total_row = 0;
		$total_page = ceil($total_row / $page_size);//1개면

		# 현재 페이지 계산
		# no 변수는 0부터 시작해서 +1을 해줌.
		$current_page = ceil(($no+1)/$page_size);
	?&gt;


	// ################### 본문 ################### //
	&lt;?php while($row=mysqli_fetch_array($result)) {?&gt;
	&lt;a href="./view.php?id=&lt;?=$row["id"]?&gt;&no=&lt;?=$no?&gt;"&gt;게시글 이름&lt;/a&gt;
	&lt;?php } mysqli_close($conn);?&gt;


	// ################### 페이징 ################### //
	&lt;div class="page" align="center"&gt;
	&lt;?php
		$start_page = floor(($current_page - 1) / $page_list_size) * $page_list_size + 1;
		# floor 함수는 소수점 이하는 버림

		# 페이지 리스트의 마지막 페이지가 몇 번째 페이지인지 구하는 부분이다.
		$end_page = $start_page + $page_list_size - 1;

		if ($total_page &lt;$end_page) $end_page = $total_page;

		if ($start_page &gt;= $page_list_size) {
			# 이전 페이지 리스트값은 첫 번째 페이지에서 한 페이지 감소하면 된다.
			# $page_size 를 곱해주는 이유는 글번호로 표시하기 위해서이다.

			$prev_list = ($start_page - 2)*$page_size;
			echo "&lt;a href=".$PHP_SELF."?no=0 style=''&gt;《&lt;/a&gt;&nbsp;";
			echo "&lt;a href=".$PHP_SELF."?no=".$prev_list." style=''&gt;〈&lt;/a&gt;&nbsp;";
		}

		# 페이지 리스트를 출력
		for ($i=$start_page;$i &lt;= $end_page;$i++) {
			$page= ($i-1) * $page_size;// 페이지값을 no 값으로 변환.
			if ($no!=$page) { //현재 페이지가 아닐 경우만 링크를 표시
				echo "&lt;a href=".$PHP_SELF."?no=".$page."&gt;$i&lt;/a&gt;";
			}
			else {
				echo "&lt;b style=''&gt;$i&lt;/b&gt;";
			}
		}

		# 다음 페이지 리스트가 필요할때는 총 페이지가 마지막 리스트보다 클 때이다.
		# 리스트를 다 뿌리고도 더 뿌려줄 페이지가 남았을때 다음 버튼이 필요할 것이다.
		if($total_page &gt;$end_page) {
			$next_list = $end_page * $page_size;
			$last_list = $total_row-($total_row%$page_size);
			echo "&nbsp;&lt;a href=".$PHP_SELF."?no=".$next_list." style=''&gt;〉&lt;/a&gt;";
			echo "&nbsp;&lt;a href=".$PHP_SELF."?no=".$last_list." style=''&gt;》&lt;/a&gt;";
		}
	?&gt;
	&lt;/div&gt; &lt;!--// page --&gt;


	// ################### 관리자 ################### //
	&lt;?php if (isset($_SESSION['admin_ID'])) {?&gt;
	&lt;div class="btn"&gt;
		&lt;div class="left"&gt;
			&lt;a href="./write.php" style="color:white;"&gt;WRITE&lt;/a&gt;
		&lt;/div&gt;
		&lt;div class="right"&gt;&lt;/div&gt;
		&lt;div style="clear:both;"&gt;&lt;/div&gt;
	&lt;/div&gt;
	&lt;?php }?&gt;</code>
		</pre>
	</div>

	<h3><span>\</span> <b>C</b>ODE - write.php</h3>
	<a href="#code-write" class="btn">&gt; Show / Hide</a>
	<div class="code" id="code-write">
		<pre>
		<code class="language-php">	&lt;form action="./write_ok.php" method="post" enctype="multipart/form-data"&gt;
		&lt;input type="text" name="title" /&gt;
		&lt;select name="category"&gt;
			&lt;option value="option1"&gt;option1&lt;/option&gt;
		&lt;/select&gt;
		&lt;input type="submit" /&gt;
	&lt;/form&gt;
		</code>
		</pre>
	</div>

	<h3><span>\</span> <b>C</b>ODE - write_ok.php</h3>
	<a href="#code-write-ok" class="btn">&gt; Show / Hide</a>
	<div class="code" id="code-write-ok">
		<pre>
		<code class="language-php">	&lt;?php
		include "./db_info.php";

		$id = $_GET["id"];
		$title = $_POST["title"];
		$category = $_POST["category"];

		$query = "INSERT INTO 테이블명 (칼럼1, 칼럼2) VALUES ('$title', '$category')";
		$result=mysqli_query($conn, $query) or die(mysqli_error());
		mysqli_close($conn);

		echo ("&lt;meta http-equiv='Refresh' content='1; URL=./write.php'&gt;");
	?&gt;
	&lt;script type="text/javascript"&gt;
	alert("정상적으로 저장되었습니다.");
	window.location.href = "./list.php";
	&lt;/script&gt;
		</code>
		</pre>
	</div>

	<h3><span>\</span> <b>C</b>ODE - view.php</h3>
	<a href="#code-view" class="btn">&gt; Show / Hide</a>
	<div class="code" id="code-view">
		<pre>
		<code class="language-php">	&lt;?php
		include "./db_info.php";

		$id = $_GET["id"];
		$no = $_GET["no"];

		// 글 정보 가져오기
		$result=mysqli_query($conn, "SELECT * FROM 테이블명 WHERE id=$id");
		$row=mysqli_fetch_array($result);
	?&gt;


	&lt;table cellpadding=0 cellspacing=0 border=0&gt;
		&lt;tr&gt;
			&lt;th&gt;No&lt;/th&gt;
			&lt;td&gt;&lt;?=$row["id"];?&gt;&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;th&gt;Title&lt;/th&gt;
			&lt;td&gt;&lt;?=$row["title"];?&gt;&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;th&gt;Category&lt;/th&gt;
			&lt;td&gt;&lt;?=$row["category"];?&gt;&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/table&gt;


	&lt;div class="btn"&gt;
		&lt;div class="left" align="left"&gt;
			&lt;?php if (isset($_SESSION['admin_ID'])) {?&gt;
			&lt;a href="./write.php"&gt;WRITE&lt;/a&gt;
			&lt;a href="./delete.php?id=&lt;?=$id?&gt;"&gt;DELETE&lt;/a&gt;
			&lt;?php }?&gt;
		&lt;/div&gt;
		&lt;div class="right" align="right"&gt;
			&lt;p class="back" onclick='javascript:history.back()'&gt;LIST&lt;/p&gt;
		&lt;/div&gt;
		&lt;div style="clear:both;"&gt;&lt;/div&gt;
	&lt;/div&gt;


	&lt;?php mysqli_query("UPDATE 테이블명 SET 조회수 칼럼 = 조회수 칼럼+1 WHERE id = $id");?&gt;
		</code>
		</pre>
	</div>

	<h3><span>\</span> <b>C</b>ODE - modify.php</h3>
	<a href="#code-modify" class="btn">&gt; Show / Hide</a>
	<div class="code" id="code-modify">
		<pre>
		<code class="language-php">	&lt;?php
		$id = $_GET["id"];
		$no = $_GET["no"];
		$result=mysqli_query($conn, "SELECT * FROM 테이블명 WHERE id=$id");
		$row=mysqli_fetch_array($result);
	?&gt;

	&lt;form action="./write_ok.php" method="post" enctype="multipart/form-data"&gt;
		&lt;input type="text" name="title" value='&lt;?=$row["title"];?&gt;' /&gt;
		&lt;select name="category"&gt;
			&lt;option &lt;?php if ($row["category"] == "option1") echo 'selected';?&gt; value="option1"&gt;option1&lt;/option&gt;
		&lt;/select&gt;
		&lt;input type="submit" /&gt;
	&lt;/form&gt;
		</code>
		</pre>
	</div>

	<h3><span>\</span> <b>C</b>ODE - modify_ok.php</h3>
	<a href="#code-modify-ok" class="btn">&gt; Show / Hide</a>
	<div class="code" id="code-modify-ok">
		<pre>
		<code class="language-php">	&lt;?php
		include "./db_info.php";

		$id = $_GET["id"];
		$title = $_POST["title"];
		$category = $_POST["category"];

		$query = "UPDATE 테이블명 SET title='$title', category='$category' WHERE id=$id";
		$result=mysqli_query($conn, $query);
		mysqli_close($conn);

		echo ("&lt;meta http-equiv='Refresh' content='1; URL=./write.php'&gt;");
	?&gt;
	&lt;script type="text/javascript"&gt;
	alert("정상적으로 수정되었습니다.");
	window.location.href = "./list.php";
	&lt;/script&gt;
		</code>
		</pre>
	</div>

	<h3><span>\</span> <b>C</b>ODE - delete.php</h3>
	<a href="#code-delete" class="btn">&gt; Show / Hide</a>
	<div class="code" id="code-delete">
		<pre>
		<code class="language-php">	&lt;?php
		include "./db_info.php";

		$id = $_GET["id"];
		$no = $_GET["no"];

		// 글 정보 가져오기
		$result=mysqli_query($conn, "SELECT * FROM 테이블명 WHERE id=$id");
		$row=mysqli_fetch_array($result);
	?&gt;

	&lt;form action="./delete_ok.php?id=&lt;?=$_GET["id"]?&gt;" method="post"&gt;
		&lt;p align="center"&gt;Are you sure you want to delete this article?&lt;/p&gt;
		&lt;br /&gt;
		&lt;div class="btn" align="center"&gt;
			&lt;input type="submit" value="YES" /&gt;
			&lt;input type="button" value="NO" onclick="history.back(-1)" /&gt;
		&lt;/div&gt;
	&lt;/form&gt;

	&lt;div class="btn" align="center"&gt;
		&lt;input type="submit" value="YES" /&gt;
		&lt;input type="button" value="NO" onclick="history.back(-1)" /&gt;
	&lt;/div&gt;
		</code>
		</pre>
	</div>

	<h3><span>\</span> <b>C</b>ODE - delete_ok.php</h3>
	<a href="#code-delete-ok" class="btn">&gt; Show / Hide</a>
	<div class="code" id="code-delete-ok">
		<pre>
		<code class="language-php">	&lt;?php
		include "./db_info.php";

		$id = $_GET["id"];

		$query = "DELETE FROM 테이블명 WHERE id=$id "; //데이터 삭제하는 쿼리문
		$result = mysqli_query($conn, $query);
	?&gt;
	&lt;meta http-equiv='Refresh' content='1; URL=./list.php'&gt;
	&lt;script type="text/javascript"&gt;alert("삭제되었습니다.");&lt;/script&gt;
		</code>
		</pre>
	</div>
	<br /><br /><br />

	<style type="text/css">
	.wrap {font-size:15px;}
	#content .wrap h3 {letter-spacing:0;}
	#content .wrap h3 span::after {content:"\00a0";}
	.ex {width:100%; border:1px solid #ddd;}
	.ex dt,
	.ex dd {padding:6px 10px; line-height:1.8;}
	.ex dt {font-weight:bold; background:#eee;}
	.ex dd {}
	.ex dd b {color:#547DBF;}
	.btn {display:inline-block; margin:15px 0 0 15px; color:#547DBF;}
	</style>

	<script type="text/javascript">
	$(function() {
		$('.btn').click(function() {
			var btnId = $(this).attr('href');
			$('div'+btnId).stop().slideToggle();
		});
	});
	</script>

	<?php } else {?>
	<script type="text/javascript">
	alert("열람 권한이 없습니다.");
	window.location.href="/";
	</script>
	<?php }?>
	</div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT']."/_layouts/_inc/bottom.php";?>
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
	<h2><b><span>S</span>TUDY / Javascript</b></h2>
	<h4>Select의 선택된 값으로 페이지 이동</h4>
	<br /><br /><br />

	<div id="intro">
	* &lt;select onchange=''&gt; 활용<br />
	<br />

	<dl class="ex">
		<dt>1. 새 창으로 열기</dt>
		<dd>
			<select id="new" onchange='if (this.value) window.open(this.value, "_blank")'>
				<option value="/">HOME</option>
				<option value="/05_study/">STUDY</option>
			</select>
		</dd>
		<dt>2. 현재 창에서 이동</dt>
		<dd>
			<select id="open" onchange="if (this.value) location.href=this.value">
				<option value="/">HOME</option>
				<option value="/05_study/">STUDY</option>
			</select>
		</dd>
	</dl>
	</div>

	<h3><span>\</span> <b>C</b>ODE - NEW</h3>
	<div class="code">
		<pre>
		<code>	&lt;select name="#" onchange='if (this.value) window.open(this.value, "_blank")'&gt;
		&lt;option value="" selected=""&gt;Family Site&lt;/option&gt;
		&lt;option value="#Link1"&gt;Link1 제목&lt;/option&gt;
		&lt;option value="#Link2"&gt;Link2 제목&lt;/option&gt;
		&lt;option value="#Link3"&gt;Link3 제목&lt;/option&gt;
	&lt;/select&gt;
	 
	&lt;!--
		onchange='if (this.value) window.open(this.value, "_blank")'
	 
		만약 select값이 변경되었을 때, 이 값이 null이 아니라면
		해당 값을 url 주소로 새 창을 열어 이동한다.
	--&gt;
		</code>
		</pre>
	</div>

	<h3><span>\</span> <b>C</b>ODE - OPEN</h3>
	<div class="code">
		<pre>
		<code>	&lt;select name="#" onchange="if (this.value) location.href=this.value"&gt;
		&lt;option value="" selected=""&gt;Family Site&lt;/option&gt;
		&lt;option value="#Link1"&gt;Link1 제목&lt;/option&gt;
		&lt;option value="#Link2"&gt;Link2 제목&lt;/option&gt;
		&lt;option value="#Link3"&gt;Link3 제목&lt;/option&gt;
	&lt;/select&gt;
	 
	&lt;!--
		onchange='if (this.value) location.href=this.value'
	 
		만약 select값이 변경되었을 때, 이 값이 null이 아니라면
		해당 값을 url 주소로 현재 창을 이동시킨다.
	--&gt;
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
	.ex dd select {width:400px; height:30px;}
	#intro b,
	#result b {color:#547DBF;}
	</style>

	<?php } else {?>
	<script type="text/javascript">
	alert("열람 권한이 없습니다.");
	window.location.href="/";
	</script>
	<?php }?>
	</div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT']."/_layouts/_inc/bottom.php";?>
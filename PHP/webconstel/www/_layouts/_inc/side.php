<div id="side">
	<h1><a href="/"><span>WEB</span><br />CONSTEL</a></h1>
	<ul class="nav">
		<li><a href="/?menu=profile" <?php if($_GET['menu']=="profile"){?>class="on"<?php }?>>PROFILE</a></li>
		<li><a href="/?menu=portfolio" <?php if($_GET['menu']=="portfolio"){?>class="on"<?php }?>>PORTFOLIO</a></li>
		<li><a href="/?menu=contact" <?php if($_GET['menu']=="contact"){?>class="on"<?php }?>>CONTACT</a></li>
		<!--<li><a href="?menu=sitemap">SITE MAP</a></li>-->
		<?php if (isset($_SESSION['admin_ID'])) {?>
		<li><a href="/?menu=study" <?php if($_GET['menu']=="study"){?>class="on"<?php }?>>STUDY</a></li>
		<li><a href="/?menu=sources" <?php if($_GET['menu']=="sources"){?>class="on"<?php }?>>SOURCES</a></li>
		<?php } ?>
		<li><a href="/?menu=citation" <?php if($_GET['menu']=="citation"){?>class="on"<?php }?>>CITATION</a></li>
	</ul>
	<p class="copy">ⓒ 2018 ~ <b>YANG, JUNG YEON</b>.<br />ALL RIGHTS RESERVED.</p>
</div> <!--// side -->
<div class="tab">
	<a href="/?menu=portfolio&mod=list&category=all" <?php if(!$_GET['category'] || $_GET['category']=="all"){?>class="on"<?php }?>>전체</a>
	<a href="/?menu=portfolio&mod=list&category=pc" <?php if($_GET['category']=="pc"){?>class="on"<?php }?>>PC</a>
	<a href="/?menu=portfolio&mod=list&category=mobile" <?php if($_GET['category']=="mobile"){?>class="on"<?php }?>>MOBILE</a>
	<a href="/?menu=portfolio&mod=list&category=responsive" <?php if($_GET['category']=="responsive"){?>class="on"<?php }?>>반응형</a>
	<a href="/?menu=portfolio&mod=list&category=program" <?php if($_GET['category']=="program"){?>class="on"<?php }?>>게시판/프로그램</a>
	<a href="/?menu=portfolio&mod=list&category=design" <?php if($_GET['category']=="design"){?>class="on"<?php }?>>디자인</a>
</div> <!--// tab -->
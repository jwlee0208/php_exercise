<form action="/article/add" method="post" class="span10">
	<?php echo validation_errors(); ?>
	<input type="text" name="title" class="span12" placeholder="제목" />
	<input type="text" name="content" class="span12" placeholder="내용" />
	<input type="submit" class="btn"/>
</form>
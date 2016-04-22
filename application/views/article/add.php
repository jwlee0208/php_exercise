

<form action="/article/add" method="post" class="span10">
	<?php echo validation_errors(); ?>
	<input type="text" name="title" class="span12" placeholder="제목" />
	<textarea name="content" placeholder="내용"></textarea>
	<input type="submit" class="btn"/>
</form>
<script src="/static/lib/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
	CKEDITOR.replace('content', {
		filebrowserUploadUrl: '/article/upload'
	});
</script>

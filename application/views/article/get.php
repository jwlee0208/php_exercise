
<div class="span10">
	<article>
		<h1><?=$article -> title?></h1>
		<?=auto_link($article -> content)?>
	</article>
	<div>
		<a href="/article/add" class="btn">추가</a>
	</div>
</div>
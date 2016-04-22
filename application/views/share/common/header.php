<!DOCTYPE HTML>
<!-- jQuery -->
<script type="text/javascript" 		src="/static/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" 		src="/static/js/jquery-validate.min.js"></script>
<script type="text/javascript" 		src="/static/js/jquery.form.min.js"></script>
<script type="text/javascript" 		src="/static/js/jquery-ui.min.js"></script>

<!-- bootstrap -->
<link 	rel="stylesheet" 			href="/static/lib/bootstrap/css/bootstrap-theme.min.css">
<link 	rel="stylesheet" 			href="/static/lib/bootstrap/css/bootstrap.min.css">
<script type="text/javascript" 		src="/static/lib/bootstrap/js/bootstrap.min.js"></script>

<!--[if IE 7 ]>		 <html class="no-js ie ie7 lte7 lte8 lte9" lang="ko-KR"> <![endif]-->
<!--[if IE 8 ]>		 <html class="no-js ie ie8 lte8 lte9" lang="ko-KR"> <![endif]-->
<!--[if IE 9 ]>		 <html class="no-js ie ie9 lte9>" lang="ko-KR"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" lang="ko-KR"> <!--<![endif]-->

<div class="container-fluid" style="background:#e7e7e7;">
	<div class="navbar-header">
		<a class="navbar-brand" style="font-weight : bold; color : #777;">Share Yours</a>	
	</div>
		<form class="navbar-form navbar-right" role="search" id="totSearchFrm" name="totSearchFrm">
			<input type="hidden" 	id="searchCondition" name="searchCondition" value="titleNcontent" 	/>
			<input type="hidden" 	id="boardId" 		 name="boardId" 		value="0" 	/>
			<input type="text" 		id="totSearchText"	 name="searchText"		class="form-control" placeholder="search" style="background-image: none; background-position: 0% 0%; background-repeat: repeat;">
		</form>

		<form class="navbar-form navbar-right">
			<select class="form-control" id="locale" name="locale">
				<option value="">::: Language :::</option>
				<option value="kr">한국어</option>
				<option value="en">English</option>
				<option value="zh">中国</option>
				<option value="ja">日本語</option>
			</select>					
		</form>
</div>
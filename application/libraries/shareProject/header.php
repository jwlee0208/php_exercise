	<!-- Bootstrap -->
<link href="/static/lib/bootstrap/css/bootstrap.min.css">	
<link href="/static/lib/bootstrap/css/bootstrap-theme.min.css">
<script type="text/javascript" 		 href="/static/lib/bootstrap/js/bootstrap.min.js"> 

<script type="text/javascript" 		 href="/static/js/jquery-1.12.3.min.js">
<script type="text/javascript" 		 href="/static/js/jquery-migrate-1.3.0.js">             		

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
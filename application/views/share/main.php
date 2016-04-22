	<div class="container" role="application">
		<div class="row row-offcanvas row-offcanvas-right">
			<div class="col-xs-12 col-sm-9" role="main">			


	<div class="blog-header">
	  <h1>Board&nbsp;&nbsp;<small>All</small></h1>
	</div>	
	
	<ol class="breadcrumb">
	  <li><a href="javascript:;">home</a></li>
	  <li><a href="javascript:;">board</a></li>
	  <li class="secondBranch active">all</li>
	</ol>		
	
	<form id="boardFrm" name="boardFrm" method="post">	
	<input type="hidden" id="boardId" name="boardId" value="0"/>

	<!-- 검색 영역 -->	
	<div class="form-group" role="search">
		<div class="">
			<input type="hidden" 	id="searchCondition" name="searchCondition" value="titleNcontent" 	/>
			<input type="text" 		id="searchText" 	 name="searchText" 		class="form-control" placeholder="search keyword" value="" />		
		</div>
	</div>
	<div id="listDiv" role="main">
		<!-- paging에 필요한 파라미터 -->
		<input type="hidden" id="pageNo" 		name="pageNo" 		value="0" /> 
		<input type="hidden" id="totalListCnt" 	name="totalListCnt" value="" /> 
		<input type="hidden" id="totalPageCnt" 	name="totalPageCnt" value="" /> 
		<input type="hidden" id="startPageNo" 	name="startPageNo" 	value="" /> 
		<input type="hidden" id="pageSize" 		name="pageSize" 	value="" />

		<div class="panel-group" id="accordion" style="min-height: 300px;">
	
<?php 
	foreach($data as $article) {
?>
			<div class="panel panel-default">
				<div class="panel-heading" style=" background: white;">
					<h4 class="panel-title" style="white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse${index.count}"><?= $article -> title?></a>
					</h4>
				</div>
				<div id="collapse${index.count}" class="collapse in">
					<div class="panel-body" style="padding-left: 15px; white-space:normal; white-break:break-word;">
						<div class="row">
							<div class="btn btn-link" style="float:left; color:#999;" onclick="javascript:goMyShare('${contentInfo.shareInfo.userId}');">
								<span class="glyphicon glyphicon-calendar"></span>&nbsp;Posted on <?= $article -> create_date?> by <a href="javascript:;"><?= $article -> author_nm ?></a>
							</div>
							<div class="btn btn-link" style="float:right; color:#999;">
								<a href=<?="'/share/".$article -> user_id."/view/".$article -> article_id."'"?> target="_blank">상세보기</a>
							</div>
						</div>		
						<div style="white-space: normal; white-break: break-all;"> 
							<?= $article -> content ?>
						</div>

<!--
						<div class="embed-responsive embed-responsive-16by9">
							<c:set var="slideshareLinkInfos" value="${contentInfo.slideshareLinkInfos}"/>
							
							<c:if test="${!empty slideshareLinkInfos}">
								<c:forEach var="slideshareLinkInfo" items="${slideshareLinkInfos}">
									<c:out value="${slideshareLinkInfo.slideshareLinkUrl}" escapeXml="false"/><br/>
								</c:forEach>
							</c:if>				
						</div>
						<div class="row">
							<div class="btn btn-link" style="float:left; color:#999;">
								<span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;Posted in <a href="/share/${contentInfo.shareInfo.userId}/list/${contentInfo.boardId}">${contentInfo.boardName}</a>
							</div>	
						</div>
					
						<div class="row" style="float: left; padding-left:10px;">
							<div class="btn btn-success" title="${contentInfo.boardCategoryName} > ${contentInfo.boardName}" onclick="javascript:goMyShare('${contentInfo.shareInfo.userId}');">${contentInfo.shareInfo.shareName}</div>			
						</div>				
						<div class="row" style="float: right; padding-right:10px;">
							<div class="btn btn-primary" title="Sharing Article To Facebook"	onclick="javascript:share('fb', '${contentInfo.articleId}', '', '${contentInfo.shareInfo.userId}');" >f</div>
							<div class="btn btn-info" 	 title="Sharing Article To Twitter" 	onclick="javascript:share('tw', '${contentInfo.articleId}', '${contentInfo.title}', '${contentInfo.shareInfo.userId}');" >t</div>
						</div>
-->							
					</div>
				</div>
			</div>					

<?php
	}
?>	
		</div>	
	</div>
	</form>
		</div>
	</div>
</div>	
	<!-- paging area                                                 
	<c:set var="totalListCnt" value="${pagedResult.totalListCnt}"/>
	<c:set var="totalPageCnt" value="${pagedResult.totalPageCnt}"/>
	<c:import url="/common/paging">
		<c:param value="${totalPageCnt}"            name="totalPageCnt"/>
	    <c:param value="${pagedResult.pageNo}"      name="pageNo"/>
	    <c:param value="${pagedResult.startPageNo}" name="startPageNo"/>
	    <c:param value="${pagedResult.endPageNo}"   name="endPageNo"/>   
	</c:import>
	-->     
<!--	
<c:if test="${isWritable}">	                                                                                                 
	<div class="btn-group btn-group-justified" style="padding-bottom: 20px;">
		<div class="btn-group">
			<input type="submit" class="btn btn-default pull-right" value="<tag:message code='common.write'/>" name="goToWrite" />
		</div>
	</div>	
</c:if>
-->
<script type="text/javascript">
/*
$(document).ready(function() {
	$("div img").addClass("media-object");
	$("div img").attr("width", "100%");
	$("div img").removeAttr("height");
	$("div img").off("error");
	$("div img").on("error", function(){
		//$(this).attr("src", '${pageContext.request.contextPath}/img/no_image.png');
	});

	$(".panel-title").each(function(){
		if($(this).hasClass("collapsed")){
			$(this).children("a").text("∨ " + $(this).children("a").text());
		}else{
			$(this).children("a").text("∧ " + $(this).children("a").text());
		}
	});
		
	$(".panel-title").click(function(){
		if($($(this).children("a").attr("href")).height() > 0){
			$(this).children("a").text($(this).children("a").text().replace("∧ ", "∨ "));
		}else{
			$(this).children("a").text($(this).children("a").text().replace("∨ ", "∧ "));
				
		}
	});
});
*/
</script>
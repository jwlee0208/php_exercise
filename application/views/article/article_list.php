
    <div class="span2">
    	<ul class="nav nav-tabs nav-stacked" id="sidebar">
 <?php   
 foreach($articles as $entry){
?>
			<li><a href="/article/get/<?=$entry -> id?>"><?=$entry -> title?></a></li>
 <?php			
 }     
 ?>	
 		</ul>
    </div>

<?php 
echo '<h1>실행시간</h1>';
#echo xdebug_time_index().'\n';
for( $i = 0 ; $i < 3 ; $i++ ){
	echo xdebug_time_index().'<br/>';
	sleep(1);
}
?>
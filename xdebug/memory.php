<?php
$text = "hello world";
$prev_mem = xdebug_memory_usage();
echo '<h1>메모리 체크</h1>';
for( $i = 0 ; $i < 10 ; $i++ ){
	$text.=$text;
	echo 'seq : '.$i.' : xdebug_memory_usage = '.xdebug_memory_usage().' : xdebug_memory_usage-prev_memory = '.(xdebug_memory_usage()-$prev_mem).' : text : '.strlen($text)."\n";
	echo '<br/>';
}
?>
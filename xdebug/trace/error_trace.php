<?php
	ini_set('xdebug.collect_params', '4');
	ini_set('xdebug.dump.GET', '*');
	ini_set('xdebug.dump.SERVER', 'REQUEST_URI');
	ini_set('xdebug.show_local_vars', 'on');

	function a($_a){
		echo $d;
		return $_a;
	}
	function b($_b){
		return a($_b);
	}
	function c($_c){
		return b($_c);
	}

	print_r(c(array('param'=>'test')));
?>
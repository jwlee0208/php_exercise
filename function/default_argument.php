<?php
/*
인자의 기본값
*/
function get_argument2($arg = 100){
	return $arg;
}

print get_argument2(1);
print ',';
print get_argument2();
?>
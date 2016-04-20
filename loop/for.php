<?php
/*
	for ( $j = 0 ; $j < 10 ; $j++ ) {
		echo 'say hello, too'.$j;
		echo '<br/>';
	}
*/
/*
	for ( $j = 0 ; $j < 10 ; $j++ ) {
		if($j == 5){
			break;
		}
		echo 'say hello, too'.$j;
		echo '<br/>';
	}
*/
	for ( $j = 0 ; $j < 10 ; $j++ ) {
		if($j == 5){
			continue;
		}
		echo 'say hello, too'.$j;
		echo '<br/>';
	}
?>
<?php
/*
 함수의 목적은 코드의 재활용
 함수의 구성
 1. 정의 define
 2. 호출 call
 
 구조
 function 함수 명 () {
	...
 }

 함수의 호출
 함수 명();
*/
 function numbering(){
 	$i = 0;
 	while($i < 10){
 		echo $i;	
 		$i++;
 	}
 }

 numbering();



/*
지역변수 / 전역변수
*/
?>
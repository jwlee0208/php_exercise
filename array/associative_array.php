<?php
/*
associative array : 연관배열
배열의 인덱스를 숫자가 아닌, 문자로 표현가능
array(index(혹은 key) => value,...)

*/
$grade = array('jwlee' => 10, 'jwleeDev'=>6, 'jwleeTaste' => 80);

var_dump($grade);

//혹은

$grade2 = [];
$grade2['jwlee'] = 10;
$grade2['jwleeDev'] = 6;
$grade2['jwleeTaste'] = 80;

var_dump($grade2);

// 열거
// for와 foreach의 차이
$grades = array('jwlee' => 10, 'jwleeDev'=>6, 'jwleeTaste' => 80);

foreach($grades as $key => $value){
	print "key : ${key} value : ${value}<br/>";
}
?>
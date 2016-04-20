<?php
/*
배열 : 여러 개의 데이터를 저장하기 위한 것
*/
$ids = array('jwlee','jwleeDev', 'jwleeTaste');

echo $ids;

// 배열의 크기를 확인
echo sizeof($ids);
echo count($ids);
	
echo $ids[0];
echo '<br/>';
echo $ids[1];
echo '<br/>';
echo $ids[2];
echo '<br/>';

for($index = 0 ; $index < sizeof($ids) ; $index++){
	echo ($index + 1).'번째 id는 '.$ids[$index];
	echo '<br/>';
}
?>
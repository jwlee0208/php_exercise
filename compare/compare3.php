<?php
// boolean :  데이터의 형식(또는 타입) 중 하나

// 연산자 : 어떤 작업을 컴퓨터에게 지시하기 위한 기호
// 연산자의 종류
// - 대입 연산자(=)
// - 비교 연산자 : 주어진 값들이 같은지, 다른지, 큰지, 작은지를 구분하는 것을 의미. 비교 연산자의 결과는 true/false 둘 중의 하나로 나타난다.
// - boolean : true/false로 나타나는 데이터 형

// -- 동등비교 연산자(===)
echo '<h1>동등비교 연산자(===)</h1>';
echo '<hr/>';
echo '<h2>숫자 비교</h2>';
echo '1 === 2 : ';
var_dump(1===2);
echo '<br/>';

echo '1 == 1 : ';
var_dump(1===1);
echo '<br/>';

echo '1 == "1" : ';
var_dump(1==="1");
echo '<br/>';

echo '<h2>문자열 비교</h2>';
echo 'one === two : ';
var_dump('one'==='two');
echo '<br/>';

echo 'one === one : ';
var_dump('one'==='one');
echo '<br/>';

?>



<h1>변수 : Variable</h1>
<hr/>
<h3>1. 변수의 사용</h3>
<?php
// 변수의 사용
// 숫자, 문자, 배열을 사용 가능.
// '$'표시를 한다.
// ex) $a : a라는 변수
// * '#', '//', '/* */'은 주석.
$a = 1;
echo $a + 1;  #2
echo "<br/>";
$a = 2;
print $a + 1; #3
echo "<br/>";
$first = "coding";
echo $first." everyone";
?>

<h3>2. 변수의 사용 : Example</h3>
<?php
$b = 100;
$b = $b + 10;
print '100 + 10 = '.$b.'<br/>';
$b = $b / 10;
print '( 100 + 10 ) / 10 = '.$b.'<br/>';
$b = $b - 10;
print '( ( 100 + 10 ) / 10 ) - 10 = '.$b.'<br/>';
$b = $b * 10;
print '( ( ( 100 + 10 ) / 10 ) - 10 ) * 10 = '.$b.'<br/>';
?>
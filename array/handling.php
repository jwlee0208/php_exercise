<?php
/*
배열의 조작
1. push
2. pop
3. shift
4. unshift
*/

// 1. push
$alphabet = ['a','b','c','d','e'];
array_push($alphabet,'f');
var_dump($alphabet);
// 2. pop
$alphabet4 = ['a','b','c','d','e'];
array_pop($alphabet4);
var_dump($alphabet4);

// 3. shifr
$alphabet2 = ['a','b','c','d','e'];
array_shift($alphabet2);
var_dump($alphabet2);

// 4. unshift
$alphabet3 = ['a','b','c','d','e'];
array_unshift($alphabet3, 'f');
var_dump($alphabet3);

?>
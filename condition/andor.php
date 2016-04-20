<?php
// 'and' == '&&'
// 'or'  == '||'
if(true and true){
	echo 1;
}
if(true and false){
	echo 2;
}
if(false and true){
	echo 3;
}
if(false and false){
	echo 4;
}




/*
if(true or true){
	echo 1;
}
if(true or false){
	echo 2;
}
if(false or true){
	echo 3;
}
if(false or false){
	echo 4;
}
*/
if(true || true){
	echo 5;
}
if(true || false){
	echo 6;
}
if(false || true){
	echo 7;
}
if(false || false){
	echo 8;
}


if (1 and 1) {
    echo 1;
}
if (1 and 0) {
    echo 2;
}
if (0 and 1) {
    echo 3;
}
if (0 and 0) {
    echo 4;
}
?>
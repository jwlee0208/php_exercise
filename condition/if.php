<?php

// if 괄호 안의 내용은 boolean (true|false)
echo "<h3>1. if의 사용</h3>";
if(true){
	echo "1st result : true";
	echo "<br/>";
}

if(false){
	echo "2nd result : false";
	echo "<br/>";
}

if(!false){
	echo "3rd result : not false";
	echo "<br/>";
}

if(true){
	echo 1;
	echo 2;
	echo 3;
	echo 4;
}
echo 5;
echo "<br/>";

echo "<h3>2. else의 사용</h3>";
if(true){
	echo 1;
	echo 2;
	echo 3;
	echo 4;
}else{
	echo 5;	
}
echo "<br/>";

echo "<h3>3. else if의 사용</h3>";
// else if는 if의 뒤에, else 앞에 위치해야 한다.
// else if 이전의 else if가 true이면 그 내용이 실행. 그리고 하위 조건문은 실행되지 않음.
echo "<pre>";
echo "if(false){";
echo "<br/>";
echo "	echo 1;";
echo "<br/>";
echo "}else if(true){";
echo "<br/>";
echo "	echo 2;";
echo "<br/>";
echo "}else if(true){";
echo "<br/>";
echo "	echo 3;";
echo "<br/>";
echo "}else{";
echo "<br/>";
echo "	echo 4;";
echo "<br/>";
echo "}";
echo "<br/>";
echo "</pre>";
if(false){
	echo 1;
}else if(true){
	echo 2;
}else if(true){
	echo 3;
}else{
	echo 4;	
}
echo "<br/>";
?>
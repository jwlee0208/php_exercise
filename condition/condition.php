<?php
/*
if($_GET['name'] === 'jwlee'){
	echo 'ya, right!';
}else{
	echo 'not matched';
}
*/
/*
if($_GET['name'] === 'jwlee'){
	echo 'pwd is '.$_GET['pwd'];	
	if(is_null($_GET['pwd'])){
		echo 'empty password';	
	}else if($_GET['pwd'] === '1234'){
		echo 'right password'; 
	}else{
		echo 'wrong password';
	}
}else{
	echo 'not matched id';
}
*/
if($_GET['name'] === 'jwlee' && $_GET['pwd'] === '1234'){
	echo 'matched';
}else{
	echo 'not matched';
}
?>
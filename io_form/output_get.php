<?php
// http://127.0.0.1:8080/io_form/input_output.php?name=12345
// id 파라미터를 url로서 입력받아 화면에 출력해주는 내용.
echo $_GET['name'];
echo '<br/>';
// http://127.0.0.1:8080/io_form/input_output.php?name=12345&pwd=1234!
echo $_GET['name'].','.$_GET['pwd'];
?>
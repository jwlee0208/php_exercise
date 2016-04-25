<?php
class My_Controller extends CI_Controller{
	 function __construct() {
	 	parent::__construct();
	 	echo var_dump($this->session->all_userdata());
	 }

	 function _footer(){
	 	$this -> load -> view('article/footer');
	 }
}
?>
<?php
class Error extends CI_controller{
	public function index(){
		$this -> load -> view('errors/404');
	}
}
?>
<?php
class Share extends CI_controller{

	function __construct(){
		parent::__construct();	
		$this -> load -> database();

		$this -> load -> model('share_model');


	}

	public function index(){
		
		$data = $this -> share_model -> getList();

		#echo var_dump($data);
		$this -> load -> view('share/common/header');
		$this -> load -> view('share/main', array('data' => $data));
		$this -> load -> view('share/common/footer');
	}
}	
?>
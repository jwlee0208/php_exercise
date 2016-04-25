<?php
class Auth_Model extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function get_user_list(){
		return $this -> db -> query("SELECT * FROM user") ->result();
	}

	function get_user_info($options){
		$result = $this -> db -> get_where('user', array('email'=>$options['email'])) -> row();
		return $result;
	}

	function add_user($options){
		$this -> db -> set('nick', $options['nick']);
		$this -> db -> set('email', $options['email']);
		$this -> db -> set('pwd', $options['pwd']);
		$this -> db -> set('create_date', 'NOW()', false);
		$this -> db -> insert('user');
		$result = $this -> db -> insert_id();
		return $result;
	}	
}
?>
<?php
class Batch_Model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function get_batch_list(){
		return $this -> db -> query("SELECT * FROM batch") -> result();
	}

	function add_batch_info($option){
		$this -> db -> set('job_name', $option['job_name']);
		$this -> db -> set('context', $option['context']);
		$this -> db -> insert('batch');
		$result = $this -> db -> insert_id();
		return $result;
	}

	function delete_batch_info($option){
		return $this -> db -> delete('batch', array('id' => $option['id']));
	}

}
?>
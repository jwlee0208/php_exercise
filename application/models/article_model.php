<?php
class Article_model extends CI_Model {
	// 생성자
	function __construct(){
		parent::__construct();
	}

	public function getArticles(){
		// 질의 : $this -> db -> query('SELECT * FROM article')
		// result() : 결과값을 어떤 방식으로 가져울 거내는 것을 결정
		// * return 값이 하나이면 row를 사용.
		return $this -> db -> query('SELECT * FROM article') -> result();
	}

	public function getArticle($id){
		// active record query 방식
		$active_record_sql = $this -> db -> get_where('article', array('id' => $id));
		// 일반적인 query 방식
		// $nomal_sql = $this -> db -> query('SELECT * FROM article WHERE id = '.$id);
		// return 
		return  $active_record_sql -> row();
	}
}
?>
<?php
class Article_model extends CI_Model {

	// 생성자
	function __construct(){
		parent::__construct();
	}

	// select list 수행
	public function getArticles(){
		// 질의 : $this -> db -> query('SELECT * FROM article')
		// result() : 결과값을 어떤 방식으로 가져울 거내는 것을 결정
		// * return 값이 하나이면 row를 사용.
		return $this -> db -> query('SELECT * FROM article') -> result();		
	}

	// select row 수행
	public function getArticle($id){
		$this -> db -> select('id');
		$this -> db -> select('title');
		$this -> db -> select('content');
		$this -> db -> select('UNIX_TIMESTAMP(create_date) as create_date');		
		// active record query 방식
		$active_record_sql = $this -> db -> get_where('article', array('id' => $id));
		// 일반적인 query 방식
		// $nomal_sql = $this -> db -> query('SELECT * FROM article WHERE id = '.$id);
		// return 
		return  $active_record_sql -> row();
	}

	// insert 수행
	public function add($title, $content){
		$this -> db -> set('create_date', 'NOW()', false);
		$this -> db -> insert('article', array('title' => $title, 'content' => $content));
		return $this -> db -> insert_id();
	}
}
?>
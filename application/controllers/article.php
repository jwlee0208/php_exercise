<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Controller : Url 을 mapping 하는 역할
class Article extends CI_Controller {

	function __construct(){
		parent::__construct();	
		// database library  로드
		$this -> load -> database();
		// model 로드
		$this -> load -> model('article_model');
	}


	// http://127.0.0.1:8080/index.php/topic
	public function index()
	{
		#echo 'topic page';
		
		// model 안에 있는 메서드를 호출
		$articles = $this -> article_model -> getArticles();
		// 데이터 확인
		/*
		foreach($data as $entry){
			var_dump($entry);
		}
		*/

		$this -> load ->view('article/header');
		$this -> load ->view('article/article_list', array('articles'=> $articles));
		$this -> load ->view('article/main');
		$this -> load ->view('article/footer');
	}

	// http://127.0.0.1:8080/index.php/topic/get/3
	// $id = 3
	public function get($id){
		#echo "topic".$id;
		// article list 조회
		$article_list = $this -> article_model -> getArticles();
		
		// 특정 article 조회
		$article = $this -> article_model -> getArticle($id);	

		$this -> load -> view('article/header');
		// article list view 
		$this -> load -> view('article/article_list', array('articles' => $article_list));
		// helper의 사용
		$this->load->helper(array('url', 'HTML', 'korean'));
		// article view
		$this -> load -> view('article/get', array('article'=>$article));
		$this -> load -> view('article/footer');
	}
}

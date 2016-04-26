<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Controller : Url 을 mapping 하는 역할
class Article extends My_Controller {

	// 생성자
	function __construct(){
		parent::__construct();	
		// database library  로드
		$this -> load -> database();
		// model 로드
		$this -> load -> model('article_model');

		$this -> load -> library('session');
	}


	// URL : http://127.0.0.1:8080/index.php/topic
	public function index()
	{
		$this -> session -> all_userdata();	
		//log_message('debug', 'all_userdata() : '.var_dump($this -> session -> all_userdata()));

		$this -> _header();
		$this -> load ->view('article/main');
		#$this -> load ->view('article/footer');
		$this -> _footer();
	}

	// URL : http://127.0.0.1:8080/index.php/topic/get/3
	// Parameter : $id = 3
	public function get($id){
		$this -> _header();
		// 특정 article 조회
		$article = $this -> article_model -> getArticle($id);	
		// helper의 사용
		$this->load->helper(array('url', 'HTML', 'korean'));
		// article view
		$this -> load -> view('article/get', array('article'=>$article));
		#$this -> load -> view('article/footer');
		$this -> _footer();
	}
	
	// description : header에 출력되는, 공통 사항들을 별도의 메서드로 분리함.
	function _header(){
		$this -> load ->view('article/header');
		// article list 조회
		$article_list = $this -> article_model -> getArticles();
		// article list view 
		$this -> load -> view('article/article_list', array('articles' => $article_list));
	}

	// description : form validation을 사용
	function add(){
		$this -> _header();
		// library load
		$this -> load -> library('form_validation');
		// class의 method 사용
		$this -> form_validation -> set_rules('title', '제목', 'required');
		$this -> form_validation -> set_rules('content', '내용', 'required'); 

		if($this -> form_validation -> run() == FALSE){
			// validation 결과가 false이면 write 화면으로
			$this -> load -> view('article/add');
		}else{
			// validation 결과가 true이면 
			// 1. DB 입력 수행
			$article_id = $this -> article_model -> add($this -> input -> post('title'), $this -> input -> post('content'));

			// 2. batch queue에 notify_email_add_topic 추가
			$this -> load -> model('batch_model');
			$this -> batch_model -> add_batch_info(array('job_name'=>'notify_email_add_topic', 'context' => json_encode(array('article_id' => $article_id))));

			// 3. get(view) 화면으로  redirect
			$this -> load ->helper('url');
			redirect('/article/get/'.$article_id);
		}
		#$this -> load -> view('footer');
		$this -> _footer();
	}

	// ckeditor 파일 업로드
	public function upload(){
		$config['upload_path'] = "./static/images";
		$config['allowed_types'] = "gif|jpg|png|jpeg";
		$config['max_size'] = "10000";
		$config['max_width'] = "1024";
		$config['max_height'] = "768";
		$this -> load -> library('upload', $config);

		// 2. 파일 업로드
		if( $this -> upload -> do_upload('upload') ){
			$CKEditorFunctionNum = $this -> input -> get('CKEditorFuncNum');	

			$data = $this -> upload -> data();
			$filename = $data['file_name'];

			$url = '/static/images/'.$filename;
			// 1. CKEditorFunction 번호
			// 2. url : 이미지 url
			// 3. 전송 성공 message
			echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction('".$CKEditorFunctionNum."', '".$url."', '전송 성공 ')</script>";
		}else{
			echo "<script>alert('업로드 실패".$this -> upload ->display_errors('','')."');</script>";
		}
	}

}

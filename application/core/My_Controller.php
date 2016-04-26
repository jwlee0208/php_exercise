<?php
class My_Controller extends CI_Controller{
	 function __construct() {
	 	parent::__construct();
	 }

	 function _footer(){
	 	$this -> load -> view('article/footer');
	 }

	 function process(){
	 	$this -> load -> model('batch_model');
	 	$queue = $this -> batch_model -> get_batch_list();

	 	if(sizeof($queue) > 0){
	 		foreach($queue as $job){
	 			switch($job -> job_name){
	 				case 'notify_email_add_topic' :
	 					$context = json_decode($job -> context);
	 					$this -> load -> model('auth_model');
	 					$users = $this -> auth_model -> get_user_list();
	 					$this -> load -> library('email');
	 					$this -> email ->initialize(array('mailtype'=>'html'));

	 					if(sizeof($users) > 0){
	 						foreach($users as $user){
	 							$this -> email -> from('jwlee0208@gmail.com', 'jinwon lee');
	 							$this -> email -> to($user -> email);
	 							$this -> email -> subject($article -> title);
	 							$this -> email -> message($article -> description);
	 							echo "{$user->email}로 메일 전송을 성공했습니다.\n";
	 						}
	 					}
	 					$this -> batch_model -> delete(array('id' => $job -> id));
	 					break;
	 			}
	 		}	
	 	}
	 }
}
?>
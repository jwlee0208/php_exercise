<?php
class Auth extends My_Controller {
	function __construct(){
		parent::__construct();
	}

	function signin(){
		$this -> load -> view('article/header');
		$this -> load -> view('auth/signin');
		$this -> _footer();
	}

	function logout(){
		$this -> session -> sess_destroy();
		$this -> load -> helper('url');
		redirect('/');
	}

	function signup(){
		$this -> load -> view('article/header');

		$this -> load -> library('form_validation');

		$this -> form_validation -> set_rules('nick', '닉네임', 'required');
		$this -> form_validation -> set_rules('email', '이메일', 'required|valid_email|is_unique[user.email]');	
		$this -> form_validation -> set_rules('pwd', '패스워드', 'required|min_length[6]|max_length[20]|matches[re_pwd]');
		$this -> form_validation -> set_rules('re_pwd', '패스워드 확인', 'required');

		if( $this -> form_validation -> run() === false ) {
			$this -> load -> view('auth/signup');
		} else {
			if(! function_exists('password_hash')) {
				$this -> load -> helper('password');
			} 

			$hash = password_hash($this -> input -> post('pwd'), PASSWORD_BCRYPT);

			$this -> load -> model('auth_model');
			$this -> auth_model -> add_user(array(
											 'email' => $this -> input -> post('email')
											,'pwd' => $hash
											,'nick' => $this -> input -> post('nick')
											));
			$this -> session -> set_flashdata('message', 'successfully join us');
			$this -> load -> helper('url');
			redirect('/');
		}

		$this -> _footer();
	}

	function authentication(){
		$this -> load -> model('auth_model');
		$user = $this -> auth_model -> get_user_info(array('email'=>$this->input->post('email')));
		
		if(!function_exists('password_hash')){
			$this -> load -> helper('password');
		}

		if($this -> input -> post('email') == $user -> email && password_verify($this -> input -> post('pwd'), $user -> pwd)){
			$this -> session -> set_userdata('is_login', true);
			$this -> load -> helper('url');
			redirect('/');	
		} else {
			$this -> session -> set_flashdata('message', 'failure to login');
			$this -> load -> helper('url');
			redirect('/auth/signin');	
		}
	}
}
?>
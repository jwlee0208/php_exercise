<?php 
class Share_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	public function getList(){
		$query = 			
		'SELECT 
			    ba.article_id,
			    ba.board_id,
			    ba.title,
			    ba.content,
			    ba.file_path, 
			    ba.original_file_name,
			    ba.author_id,
			    ba.author_nm,
			    ba.create_date,
			    bc.board_category_id,
			    bc.board_category_name,
			    b.board_name,
			    sl.slide_id,
			    sl.slideshare_link_url,
			    s.user_id,
			    s.share_name 
			FROM TB_BOARD_ARTICLE ba
			INNER JOIN TB_BOARD 			b  ON b.board_id 			= ba.board_id
			INNER JOIN TB_BOARD_CATEGORY 	bc ON b.board_category_id 	= bc.board_category_id
			LEFT  JOIN TB_SLIDESHARE_LINK 	sl ON sl.article_id 		= ba.article_id
			INNER JOIN TB_SHARE 			s  ON s.user_id 			= bc.create_user_id';
		return $this -> db -> query($query) -> result();
	}
}	
?>
<?
class posts {
	function index(){
		global $request;
		$posts = get_all('SELECT * FROM post');
		require 'views/master_view.php';
	}
	function view(){
		global $request;
		if (!empty($request->post)) {


		}
		$id=$request ->params[0];
		$post = get_first("SELECT * FROM post WHERE post_id='$id'");
		$comments = get_all("SELECT comment_id, comment_text, comment_time, username FROM comment NATURAL JOIN user");
		require 'views/master_view.php';
	}

}
?>
<?php
class comment {
	function add(){
		global $request;
		insert('comment', $request->post);
	}
}
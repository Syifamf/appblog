<?php

use Orm\Post as PostOrm;

class Post extends CI_Controller {
    public function index()
	{
        if($this->input->get()){
            $post_list = PostOrm::where('article', 'like', '%' . $this->input->get('cari') . '%')->get();
        }else{
            $post_list = PostOrm::all()->sortByDesc('created_at');
        }
		
		view('post', ['post_list' => $post_list]);
	}

    public function baca($id){
        $post = PostOrm::find($id);
        
        view('baca', ['post' => $post]);
    }
}
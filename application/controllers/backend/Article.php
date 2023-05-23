<?php

use Orm\Post;

class Article extends MY_Controller{

    public function form(){
        $notif = '';

        if($this->input->post()){
            $title = $this->input->post('title');
            $article = $this->input->post('article');

            if($title == '' || $article == ''){
                $notif = 'Title dan Article Tidak Boleh Kosong';
            }else{
                $post = new post();
                $post->title = $title;
                $post->article = $article;
                $post->save();
            }
        
        }

        view('backend.Article.form',['notif' => $notif] );
    }

    public function list(){
        $post_list = Post::all();

        view('backend.Article.list', ['post_list' => $post_list]);
    }

}
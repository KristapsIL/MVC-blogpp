<?php
require "models/Blog.php";
class BlogController {
    public function index() {
        $posts = Blog::all();
        require "views/blog/index.view.php";
      }  
    public function show(){
        $post = Blog::find($_GET["id"]);
        require "views/blog/show.view.php";
    }
    public function create(){
        require "views/blog/create.view.php"; 
    }
    public function store(){
        
        return back();
    }
    public function edit(){
        require "views/blog/edit.view.php";
    }
    public function update(){
        return back();
    }
    public function destroy(){
        return back();
    }
}
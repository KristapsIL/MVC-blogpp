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
        Blog::create(["content" => $_POST["content"]]);
        header("Location: /");
        exit();
    }
    public function edit(){
        $post = Blog::find($_GET["id"]);
        require "views/blog/edit.view.php";
    }
    public function update(){
        Blog::save($_GET["id"],["content" => $_POST["content"]]);
        header("Location: /");
        exit();
    }
    public function destroy(){
        header("Location: /");
        exit();
    }
}
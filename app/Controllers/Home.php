<?php

namespace App\Controllers;

use App\Models\Posts;

class Home extends BaseController
{
    protected $postModel;

    public function __construct()
    {
        $this->postModel = new Posts();
    }

    public function index(): string
    {
        $posts = $this->postModel->findAll();

        return view('welcome_message',compact('posts'));
    }
}

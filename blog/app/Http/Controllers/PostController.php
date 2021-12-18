<?php

namespace App\Http\Controllers;

use App\Http;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return $post->get();
    }
}

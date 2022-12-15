<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
{
    return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
}
}
?>

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return $post->get();
}

<<<<<<< HEAD
?>
=======
>>>>>>> master

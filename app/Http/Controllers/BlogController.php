<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use TCG\Voyager\Models\Post;

class BlogController extends Controller
{
    public function listBlog()
    {
        $articles = Post::with('authorId')->where('status', 1)->paginate(10);

        return view('blog', compact('articles'));
    }

    public function detailBlog($slug)
    {
        $article = Post::with('authorId')->where('slug', '=', $slug)->firstOrFail();
        return view('blog-detail', compact('article'));

    }
}

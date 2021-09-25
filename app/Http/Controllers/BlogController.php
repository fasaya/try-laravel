<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog', [
            'title' => 'Blog',
            'posts' => Blog::get_posts()
        ]);
    }

    public function detail($slug)
    {
        $post = Blog::detail($slug);

        return view('blog_detail', [
            'title' => 'Blog - ' . $post['title'],
            'post' => $post
        ]);
    }
}

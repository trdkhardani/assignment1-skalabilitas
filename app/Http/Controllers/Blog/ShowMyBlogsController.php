<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;

class ShowMyBlogsController extends Controller
{
    public function myBlogs()
    {
        $userId = Auth()->user()->id;
        $blogs = Blog::where('user_id', $userId)->get();

        return view('blog.myblogs', [
            'blogs' => $blogs,
        ]);
    }
}

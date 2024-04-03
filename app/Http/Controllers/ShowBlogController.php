<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

class ShowBlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();

        return view('index', [
            'blogs' => $blogs,
            ]
        );
    }
}

<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;

class DeleteBlogController extends Controller
{
    public function deleteBlog($blogId)
    {
        $blog = Blog::find($blogId);

        Blog::destroy($blog->id);

        return redirect('/my-blogs')->with('success', 'Blog Deleted Successfully!');
    }
}

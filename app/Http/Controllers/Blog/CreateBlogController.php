<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class CreateBlogController extends Controller
{
    public function getCreate()
    {
        return view('blog.create', [
            'categories' => Category::all(),
        ]);
    }

    public function postCreate(Request $request)
    {
        $validatedData = $request->validate(
            [
                'title' => 'required|max:255',
                'category_id' => 'required',
                'body' => 'required',
            ]
        );

        $validatedData['user_id'] = auth()->user()->id;

        Blog::create($validatedData);

        return redirect('/my-blogs')->with('success', 'Blog Created Successfully!');
    }
}

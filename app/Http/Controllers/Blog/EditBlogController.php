<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;
use App\Models\Category;

class EditBlogController extends Controller
{
    public function getEdit($blogId)
    {
        $blog = Blog::find($blogId);

        if ($blog->user->id !== auth()->user()->id) {
            abort(403);
        }

        return view(
            'blog.edit',
            [
                'blog' => $blog,
                'categories' => Category::all(),
            ]
        );
    }

    public function postEdit(Request $request, $blogId)
    {
        $blog = Blog::find($blogId);

        $rules =
            [
                'title' => 'required|max:255',
                'category_id' => 'required',
                //'image' => 'image|file|max:1024', //validasi image harus berupa file dan ukuran maksimal 1MB
                'body' => 'required',
            ];
        $validatedData = $request->validate($rules);

        $validatedData = $request->validate($rules);
        $validatedData['user_id'] = auth()->user()->id;

        Blog::where('id', $blog->id)
            ->update($validatedData);

        return redirect('/my-blogs')->with('success', 'Blog Edited Successfully!');
    }
}

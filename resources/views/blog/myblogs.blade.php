@include('template.header')

<!-- Main Content -->
<div class="container mt-5">
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif
</div>
<div class="container mt-5">
    <h1>{{ Auth()->user()->name }}'s Blogs</h1>
    @if (!$blogs->count())
        <h2>No Blogs Found</h2>
    @else
        <ul class="list-group">
            @foreach ($blogs as $blog)
                <li class="list-group-item">
                    <h2>{{ $blog->title }}</h2>
                    <p>Author: {{ $blog->user->name }}</p>
                    <p>Category: {{ $blog->category->category_name }}</p>
                    <p>{{ $blog->body }}</p>
                    <p>Posted {{ $blog->created_at->diffForHumans() }}</p>
                    <div class="btn-group" role="group">
                        <a href="/edit-blog/{{ $blog->id }}" class="btn btn-primary">Edit</a>
                        <form action="/delete-blog/{{ $blog->id }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Delete this blog?')">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    @endif
</div>

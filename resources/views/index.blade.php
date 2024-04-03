<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skalbil Blogs</title>
</head>

<body>
    <h1>Blogs</h1>
    @if (!$blogs->count())
        <h2>No Blogs Found</h2>
    @else
        <ul>
            @foreach ($blogs as $blog)
                <li>
                    <h2>{{ $blog->title }}</h2>
                    <p>Author: {{ $blog->user->name }}</p>
                    <p>Category: {{ $blog->category->category_name }}</p>
                    <p>{{ $blog->body }}</p>
                    <p>Posted {{ $blog->created_at->diffForHumans() }}</p>
                </li>
            @endforeach
        </ul>
    @endif
</body>

</html>

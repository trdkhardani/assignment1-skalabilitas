<!doctype html>
<html lang="en">

@include('template.header')

<!-- Main Content -->
<div class="container mt-5">
    <h1>Blogs</h1>
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
                </li>
            @endforeach
        </ul>
    @endif
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
</body>

</html>


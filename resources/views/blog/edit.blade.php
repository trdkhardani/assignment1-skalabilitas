@include('template.header')

<div class="container mt-5">
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <h2>Edit Blog</h2>

    <form action="/update-blog/{{ $blog->id }}" method="post">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input value="{{ $blog->title }}" type="text" id="title" name="title" class="form-control">
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Category:</label>
            <input value="{{ $blog->category_id }}" type="number" min="0" id="category_id" name="category_id" class="form-control">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body:</label>
            <input value="{{ $blog->body }}" type="text" id="body" name="body" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Edit Blog</button>
        </div>
    </form>
</div>
</div>

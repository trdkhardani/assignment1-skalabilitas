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
            <select class="form-select" name="category_id" id="category_id">
                @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $blog->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->category_name }}
                </option>
            @endforeach
            </select>
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

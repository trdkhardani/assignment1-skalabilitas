@include('template.header')

<div class="container mt-5">
    <h2>Add New Blog</h2>

    <form action="/add-blog" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" id="title" name="title" class="form-control">
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Category:</label>
            <select class="form-select" name="category_id" id="category_id">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body:</label>
            <input type="text" id="body" name="body" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Add Blog</button>
        </div>
    </form>
</div>
</div>

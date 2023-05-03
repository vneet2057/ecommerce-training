@extends('admin.layouts.main')
@section('content')

<div class="container mt-4">
    <h4>Edit Category Details</h4>
    <form action="/update-category/{{$category->id}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Category Name</label>
            <input type="text" name="category_name" value="{{$category->category_name}}" class="form-control">
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </div>
    </form>
</div>

@endsection
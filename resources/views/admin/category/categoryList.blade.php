@extends('admin.layouts.main')
@section('content')

@if(session('message'))
<div class="container mt-3 alert alert-success">
    <span>{{session('message')}}!</span>
</div>
@endif
<div class="container mt-4">
    <h4>Add Category Details</h4>
    <form action="/add-category" method="post">
        @csrf
        <div class="form-group">
            <label for="">Category Name</label>
            <input type="text" name="category_name" id="" class="form-control">
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </div>
    </form>
</div>

<div class="container mt-4">
    <h4>Category List</h4>
    <table class="table display">
        <thead>
            <th>Category Name</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{$category->category_name}}</td>
                <td><a href="/edit-category/{{$category->id}}" class="btn btn-primary">Edit</a>
                <a href="/delete-category/{{$category->id}}" class="btn btn-danger ms-2">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
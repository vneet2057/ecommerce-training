@extends('admin.layouts.main')
@section('content')

@if(session('message'))
<div class="container mt-3 alert alert-success">
    <span>{{session('message')}}!</span>
</div>
@endif
<div class="container mt-4">
    <h4>Add Product Details</h4>
    <form action="/add-product" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" name="product_name" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Product Image</label>
                <input type="file" name="product_image" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Product Price</label>
                <input type="number" step="any" name="product_price" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Select Category</label>
                <select name="category_id" id="" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="">Product Desc</label>
                <textarea name="product_desc" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </div>
    </form>
</div>


<div class="container mt-4">
    <h4>Product List</h4>
    <table class="table display">
        <thead>
            <th>Product Name</th>
            <th>Product Category</th>
            <th>Product Price</th>
            <th>Product Desc</th>

            <th>Action</th>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>
                    {{$product->product_name}}
                </td>
                <td>{{$product->category['category_name']}}</td>
                <td>{{$product->product_price}}</td>
                <td>{{$product->product_desc}}</td>
                <td><a href="/edit-product/{{$product->id}}" class="btn btn-primary">Edit</a>
                    <a href="/delete-product/{{$product->id}}" class="btn btn-danger ms-2">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
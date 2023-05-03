@extends('admin.layouts.main')
@section('content')

@if(session('message'))
<div class="container mt-3 alert alert-success">
    <span>{{session('message')}}!</span>
</div>
@endif
<div class="container mt-4">
    <h4>Update Product Details</h4>
    <form action="/update-product/{{$product->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" name="product_name" value="{{$product->product_name}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Product Image</label>
                <input type="file" name="product_image" value="{{$product->product_image}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Product Price</label>
                <input type="number" step="any" name="product_price" value="{{$product->product_price}}" class="form-control">
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
                <textarea name="product_desc" id="" cols="30" rows="10" class="form-control">{{$product->product_desc}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </div>
    </form>
</div>



@endsection
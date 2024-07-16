@extends('layouts.layout')

@section('title')
    Update Product
@endsection


@section('content')
@include('includes.error')
<div class="row m-3 p-3 border border-2 bg-dark-subtle">
    <form class="col-8 row g-3" method="post" action="{{route('allproducts_update',$product->id)}}" enctype="multipart/form-data">
      @csrf
      <div class="col-md-6">
        <label for="inputTitle" class="form-label">Title</label>
        <input type="text" value="{{old('title') ?? $product->title }}" name="title" class="form-control" id="inputTitle"> 
      </div>
      <div class="col-md-6">
        <label for="inputResc" class="form-label">Description</label>
        <input type="text" value="{{old('description') ?? $product->description}}" name="description" class="form-control" id="inputDesc">
      </div>
      <div class="col-6">
        <label for="inputPrice" class="form-label">Price</label>
        <input type="text" value="{{ $product->price}}" name="price"  class="form-control" id="inputPrice" >
      </div>
       
      <div class="col-6">
        <label for="inputImg" class="form-label">Product Image</label>
        <input type="file"   name="img"  class="form-control" id="inputImg" >
      </div>
      
      <div class="col-6">
        <label for="inputImg" class="form-label"> Category</label>
        <input type="text" value="{{old('category') ?? $product->category}}" name="category"  class="form-control" id="inputImg" >
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{route('allproducts_index')}}" class="btn btn-info">cancel</a>
      </div>
    </form>
    <div class="col-4">
        <h5 class="p-2 text-center">The Old Image</h5>
        <img src="../../uploads/products/{{$product->img}}" class="w-100" alt="{{$product->title}}">
    </div>
</div>
@endsection
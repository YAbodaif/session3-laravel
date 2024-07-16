@extends('layouts.layout')

@section('title')
   All Products
@endsection

@section('content')

<h1>All Products</h1>
<a class="btn btn-primary" href="{{route('allproducts_add')}}">Add New Product</a>

<div class="row">

  @foreach ($products as $product)

    <div class="col-md-6 col-lg-4 p-2">
        <div class="card " >
            <img src="uploads/products/{{$product->img}}" class="card-img-top" alt="{{$product->title}}">
            <div class="card-body">
                <h5 class="card-title">{{$product->id}} : {{$product->title}}</h5>
                <p class="card-text">{{$product->descreption}}</p>
                <h5 class="card-text text-primary">$ {{$product->price}}</h5>

                <a class="btn btn-primary" href="{{route('allproducts_viewOne',$product->id)}}">Details</a>
                <a class="btn btn-info" href="{{route('allproducts_edit',$product->id)}}">Edit</a>
                <a class="btn btn-danger" href="{{route('allproducts_delconfirm',$product->id)}}">Delete</a>
            </div>
        </div>
    </div>
 @endforeach
</div>

{{$products->links()}}

@endsection

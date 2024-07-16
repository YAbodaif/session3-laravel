@extends ('Layouts/layout')

@section('title')
    {{$product->title}}
@endsection
@section('content')
    <h2>{{$product->title}} Details</h2>
    <hr>
<div class="row">
    <div class="col-6">
        <h5><span class="fs-3" >Id : </span>{{$product->id}}</h5>
        <h5><span class="fs-3" >Title : </span>{{$product->title}}</h5>
        <h5><span class="fs-3" >Descreption : </span>{{$product->description}}</h5>
        <h5><span class="fs-3" >Category : </span>{{$product->category}}</h5>
        <h5><span class="fs-3" >Quantity : </span>{{$product->quantity}}</h5>
        <h5><span class="fs-3" >Price : </span>{{$product->price}}</h5><br>
    </div>
    <div class="col-6">
        <img src='../../uploads/products/{{$product->img}}' class="w-100" alt="{{$product->title}}">
    </div>
</div>
   
    <hr>
    <div class="p-3 text-center bg-danger-subtle">
     <h3>Are You Wante to Delete this Product</h3>
    <a class="btn btn-info" href="{{route('allproducts_index')}}">Cancel</a>
    <a class="btn btn-danger" href="{{route('allproducts_delete',$product->id)}}">Delete</a>
    </div>
  
@endsection

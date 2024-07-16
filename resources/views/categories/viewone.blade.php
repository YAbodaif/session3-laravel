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
        <h5><span class="fs-3" >Categories </span></h5><br>
        @if(count($product->categories)>0)
            <ul>
                @foreach ($product->categories as $cat)
                    <li>{{$cat->name}}</li>
                @endforeach
            </ul> 
        @else
            <p>No categories for this Product</p>
        @endif

    </div>
    <div class="col-6">
        <img src="../uploads/products/{{$product->img}}" class="w-100" alt="{{$product->title}}">
    </div>
</div>
   
    <hr>
    <a class="btn btn-primary" href="{{route('allproducts_index')}}">Back</a>
@endsection

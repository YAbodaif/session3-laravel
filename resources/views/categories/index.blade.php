@extends('layouts.layout')

@section('title')
   All Products
@endsection

@section('content')

<h1>All Products</h1>
<a class="btn btn-primary" href="{{route('categories_add')}}">Add New Category</a>

<div class="row">

  @foreach ($categories as $category)

    <div class="col-md-6 col-lg-4 p-2">
        <div class="card " >
            <div class="card-body">
                <h5 class="card-title">{{$category->id}} : {{$category->name}}</h5>
               
               

                <a class="btn btn-primary" href="{{route('categories_viewOne',$category->id)}}">Details</a>
                <a class="btn btn-info" href="{{route('categories_edit',$category->id)}}">Edit</a>
                <a class="btn btn-danger" href="{{route('categories_delconfirm',$category->id)}}">Delete</a>
            </div>
        </div>
    </div>
 @endforeach
</div>

{{$categories->links()}}

@endsection

@extends('layouts.layout')

@section('title')
    Add New Product
@endsection


@section('content')
@include('includes.error')
<div class="m-3 p-3 border border-2 bg-dark-subtle">
    <form class="row g-3" method="post" action="{{route('allproducts_store')}}" enctype="multipart/form-data">
      @csrf
      <div class="col-md-6">
        <label for="inputTitle" class="form-label">Title</label>
        <input type="text" value="{{old('title')}}" name="title" class="form-control" id="inputTitle"> 
      </div>
      <div class="col-md-6">
        <label for="inputResc" class="form-label">Description</label>
        <input type="text" value="{{old('description')}}" name="description" class="form-control" id="inputDesc">
      </div>
      <div class="col-6">
        <label for="inputPrice" class="form-label">Price</label>
        <input type="number" value="{{old('price')}}" name="price"  class="form-control" id="inputPrice" >
      </div>
       
      <div class="col-6">
        <label for="inputImg" class="form-label">Product Image</label>
        <input type="file" value="{{old('img')}}"  name="img"  class="form-control" id="inputImg" >
      </div>
      
    
      <div class="col-6">
        <label for="inputCat" class="form-label">Category</label>
        <select id="inputCat"  name="category" class="form-select">
          @foreach ($cats as $cat )
            @if($cat->first)
            <option selected value="{{$cat->id}}">{{$cat->name}}</option>
            @else
            <option  value="{{$cat->id}}">{{$cat->name}}</option>
            @endif
          @endforeach
        </select>
    </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{route('allproducts_index')}}" class="btn btn-info">cancel</a>
      </div>
    </form>
</div>
@endsection
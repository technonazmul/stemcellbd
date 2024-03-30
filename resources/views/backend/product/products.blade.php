@extends('backend.dashboard')
@section('content')
<div class="row">
    <div class="col-6"><h4>Products</h4></div>
    <div class="col-6">
        <form class="form-inline float-right">
            
            <div class="form-group mx-sm-3 mb-2">
              <label for="search" class="sr-only">Search</label>
              <input type="text" class="form-control" id="search" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Search</button>
          </form>
    </div>
</div>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">Image</th>
        <th scope="col">View</th>
        <th scope="col">Special Item</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @php
          $i = 1;
      @endphp
      @foreach ($products as $item)
      <tr>
        <th scope="row">{{$i}}</th>
        <td>{{$item->name}}</td>
        <td><del>{{$item->price}}</del> {{$item->offer_price}} </td>
        <td>
          @if(strpos($item->images, ','))
          @php
              $images = explode(',',$item->images);
          @endphp
          <img src="{{asset('storage/products/'.$images[0])}}" alt="" width="100">
          @else
          <img src="{{asset('storage/products/'.$item->images)}}" alt="" width="100">
          @endif
          </td>
        <td><a href="#">View</a></td>
        
        <td>
          @if ($item->make_feature == 1)
          <a href="{{route('product_make_feature',$item->id)}}" class="btn btn-success btn-sm mr-2">Featured</a> 
          @else
          <a href="{{route('product_make_feature',$item->id)}}" class="btn btn-primary btn-sm mr-2">Make Feature</a> 
          @endif

          @if ($item->show_footer == 1)
          <a href="{{route('product_add_footer',$item->id)}}" class="btn btn-success btn-sm mr-2">Added Footer</a> 
          @else
          <a href="{{route('product_add_footer',$item->id)}}" class="btn btn-primary btn-sm mr-2">Add to Footer</a> 
          @endif
          
        </td>
        <td><a href="{{route('product_edit', $item->id)}}" class="btn btn-primary btn-sm mr-2">Edit</a> 
          <a href="{{route('product_delete', $item->id)}}" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure you want to delete this item')">Delete</a></td>
      </tr>
      @php
          $i++;
      @endphp
      @endforeach
      
      
    </tbody>
  </table>
@endsection
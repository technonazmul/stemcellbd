@extends('backend.dashboard')
@section('content')
<div class="row">
    <div class="col-6"><h4>Product Reviews</h4></div>
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
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Rating</th>
        <th scope="col">Message</th>
        <th scope="col">Product</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @php
          $i = 1;
      @endphp
      @foreach ($reviews as $item)
      <tr>
        <th scope="row">{{$i}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->email}} </td>
        <td>{{$item->rating}} </td>
        <td>{{$item->message}} </td>

        <td>
            <p>{{$item->product->name}}</p>
            <a href="{{route('shop_single',$item->product->slug)}}" target="__blank" >View</a>
        </td>
        
        <td>
            @if ($item->status ==0)
            <a href="{{route('admin.product_reviews_approve', $item->id)}}" class="btn btn-warning btn-sm mr-2">Publish</a> 
            @else
            <a href="{{route('admin.product_reviews_approve', $item->id)}}" class="btn btn-outline-primary btn-sm mr-2">Unpublish</a> 
            @endif
            
          <a href="{{route('admin.product_reviews_delete', $item->id)}}" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure you want to delete this item')">Delete</a></td>
      </tr>
      @php
          $i++;
      @endphp
      @endforeach
      
      
    </tbody>
  </table>
  {{ $reviews->links() }}
@endsection
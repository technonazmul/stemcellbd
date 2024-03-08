@extends('backend.dashboard')
@section('content')
@php 
$categories = App\Models\Category::where('parent_id', 0)->get();
@endphp
  
<ul class="list-group">
  @foreach( $categories as $category )
  <li class="list-group-item">{{ $category->name }} <a href="#" class="btn btn-danger float-right" >Delete</a> <a href="{{route('edit_category',$category->id)}}" class="btn btn-success float-right mr-3" >Edit</a></li>
    @foreach(App\Models\Category::where('parent_id', $category->id)->get() as $subcategory)
    <li class="list-group-item">&nbsp;&nbsp;&nbsp; - {{ $subcategory->name }} <a href="#" class="btn btn-danger float-right" >Delete</a> <a href="{{route('edit_category',$subcategory->id)}}" class="btn btn-success float-right mr-3" >Edit</a> </li>
    @endforeach
  @endforeach
    
  </ul>
@endsection
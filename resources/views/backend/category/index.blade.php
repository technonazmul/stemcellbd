@extends('backend.dashboard')
@section('content')
@php 
$categories = App\Models\Category::where('parent_id', null)->get();
@endphp
  
<ul class="list-group">
  @foreach( $categories as $category )
  <li class="list-group-item">{{ $category->name }}</li>
    @foreach(App\Models\Category::where('parent_id', $category->id)->get() as $subcategory)
    <li class="list-group-item">&nbsp;&nbsp;&nbsp; - {{ $subcategory->name }}</li>
    @endforeach
  @endforeach
    
  </ul>
@endsection
@extends('backend.dashboard')
@section('content')
<div class="container">
    <h3 class="text-center">All Blog Post</h3>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Si.No</th>
            <th scope="col">Title</th>
            <th scope="col">Thumbnail</th>
            <th scope="col">Tags</th>
            <th scope="col">User</th>
          </tr>
        </thead>
            @php $i=0 @endphp
            @foreach($blog as $blog)
            @php $i++@endphp
            <td>@php echo $i @endphp </td>
            <td></td>
        <tbody>
          <tr>
            <th scope="row">1</th>
          </tr>
        </tbody>
    </table>
</div>
@endsection
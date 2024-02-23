@extends('backend.dashboard')
@section('content')
<div class="container">
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
    <div class="row">
        <div class="col-md-4">
            <h3>Add Treatmen Types</h3>
            <form method="POST" action="{{route('admin.add_treatmen_types')}}">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title"required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-4">
         <h3>All Treatment Types</h3>
         <table class="table">
            <thead>
                <tr>
                    <th>Si.No</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php $i=0 @endphp
                @foreach($treatmentTypes as $data)
                <tr>
                    @php $i++@endphp
                    <td> @php echo $i @endphp </td>
                    <td>{{ $data->title }}</td>
                    <td><a href="{{route('admin.edit_treatment_types',$data->id)}}"><button type="button" class="btn btn-warning">Edit</button></a></td>
                    <td> <a href=""><button class="btn btn-sm btn-danger">Delate</button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- edit form --}}
        
          
          <!-- Modal -->
                  
    </div>
    
</div>
@endsection
@extends('backend.dashboard')
@section('content')
<div class="container">
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Si.No</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Date</th>
                <th>Treatment Types</th>
                <th>Message</th>
                <th>Notes</th>
                <th>Status</th>
                <th>Action</th>
                
            </tr>
        </thead>
        </thead>
        @php $i=0 @endphp
        @foreach($appointmet_data as $data)
        <tbody>
            <tr>
                @php $i++@endphp
                <td> @php echo $i @endphp </td>
                <td>{{$data->name}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->gender}}</td>
                <td>{{$data->date}}</td>
                <td>{{$data->treatment_types}}</td>
                <td>{{$data->message}}</td>
                <td>{{$data->notes}}</td>
                <td>{{$data->status}}</td>
                <td><a href="{{route('admin.edit_appointment',['id'=>$data->id])}}"><button class="btn btn-warning btn-sm">Edit</button></a></td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection   
    
    
    
@extends('backend.dashboard')
@section('content')
<div class="container">
    <h1 class="text-center">Free Caosultancy Form Data</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Si.No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Company</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            @php $i=0 @endphp
            @foreach($free_consultancy as $data)
                <tr>
                    @php $i++ @endphp
                    <td> @php echo $i @endphp </td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->company }}</td>
                    <td>{{ $data->subject }}</td>
                    <td>{{ $data->message }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
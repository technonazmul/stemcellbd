@extends('backend.dashboard')

@section('content')
    <div class="container">
        <h1 class="text-center">Early Bird Form Data</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Si.No</th>
                    <th>Name</th>
                    <th>Registration Type</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Preferred Date</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php $i=0 @endphp
                @foreach($eb_data as $data)
                    <tr>
                        @php $i++ @endphp
                        <td> @php echo $i @endphp </td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->registration_type }}</td>
                        <td>{{ $data->date_of_birth }}</td>
                        <td>{{ $data->gender }}</td>
                        <td>{{ $data->preferred_date }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>
                            <!-- Large modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg{{ $data->id }}">See More</button>
                        </td>
                        <div class="modal fade bd-example-modal-lg{{ $data->id}} " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg  ">
                              <div class="modal-content card">
                                    <div class="card-body" id="printable-content">
                                        <p><strong>Name:</strong> {{ $data->name }}</p>
                                        <p><strong>Registration Type:</strong> {{ $data->registration_type }}</p>
                                        <p><strong>Date of Birth:</strong> {{ $data->date_of_birth }}</p>
                                        <p><strong>Gender:</strong> {{ $data->gender }}</p>
                                        <p><strong>Current Health Condition:</strong> {{ $data->c_health_condition }}</p>
                                        <p><strong>Previous Medical History:</strong> {{ $data->p_medical_history }}</p>
                                        <p><strong>Treatment of Interest:</strong> {{ $data->treatment_of_interest }}</p>
                                        <p><strong>Preferred Date:</strong> {{ $data->preferred_date }}</p>
                                        <p><strong>Profession:</strong> {{ $data->profession }}</p>
                                        <p><strong>Address:</strong> {{ $data->address }}</p>
                                        <p><strong>Email:</strong> {{ $data->email }}</p>
                                        <p><strong>Phone:</strong> {{ $data->phone }}</p>
                                        <p><strong>Message:</strong> {{ $data->message }}</p>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection
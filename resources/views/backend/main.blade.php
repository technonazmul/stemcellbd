@extends('backend.dashboard')

@section('content')
<div class="container-fluid">
    {{-- Summary Cards --}}
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Appointments</h5>
                    <p class="card-text">{{ $todayAppointments }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Doctors</h5>
                    <p class="card-text">{{ $totalDoctors }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">New Messages / Inquiries</h5>
                    <p class="card-text">0</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-info mb-3">
                <div class="card-body">
                    <h5 class="card-title">Early Bird Registrations</h5>
                    <p class="card-text">{{ $earlybirdformdata }}</p>
                </div>
            </div>
        </div>
    </div>

    {{-- More Summary --}}
    <div class="row">
        <div class="col-md-3">
            <div class="card text-white bg-dark mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Products in Store</h5>
                    <p class="card-text">{{ $totalProducts }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title">Shop Orders Today</h5>
                    <p class="card-text">{{ $totalOrders }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title">Pharmacy Orders</h5>
                    <p class="card-text">{{ $pharmacyOrders }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title">Pathology Request</h5>
                    <p class="card-text">{{ $pathologyRequests }}</p>
                </div>
            </div>
        </div>
    </div>

    

    {{-- Tables --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">Recent Appointments</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Patient</th>
                                <th>Doctor</th>
                                <th>D-TM</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Add data here --}}
                            @foreach($appointments as $data)
                                <tr>
                                    
                                    
                                    <td>{{ $data->name }}</td>
                                    @if($data->doctor_id != null)
                                        @php
                                        $doctor = \App\Models\Doctor::where('id', $data->doctor_id)->first();
                                        @endphp
                                        @if($doctor)
                                        <td>{{$doctor->name}}</td>
                                        @else
                                        <td>Not Assigned</td>
                                        @endif
                                    @else
                                        <td>Not Assigned</td>
                                    @endif
                                    <td>{{ $data->day }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        
    </div>

   
@endsection

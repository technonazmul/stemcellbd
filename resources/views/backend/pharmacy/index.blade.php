@extends('backend.dashboard')

@section('content')
<div class="container">
    <h2 class="mb-4">Pharmacy/Medicine Order List</h2>
    <div class="table-responsive">
        <table id="pharmacyTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Prescription</th>
                    <th>Message</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pharmacies as $pharmacy)
                    <tr>
                        <td>{{ $pharmacy->id }}</td>
                        <td>{{ $pharmacy->name }}</td>
                        <td>{{ $pharmacy->phone }}</td>
                        <td>{{ $pharmacy->subject }}</td>
                        <td>
                            @if($pharmacy->prescription_photo)
                                <a href="{{ asset('storage/public/prescriptions/'.$pharmacy->prescription_photo) }}" target="_blank">View</a>
                            @else
                                N/A
                            @endif
                        </td>
                        <td>{{ $pharmacy->message }}</td>
                        <td>
                            {{ $pharmacy->created_at->format('Y-m-d h:i A') }}
                            <br>
                            <small class="text-muted">({{ $pharmacy->created_at->diffForHumans() }})</small>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
<!-- DataTables and Buttons CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

<!-- jQuery & DataTables JS -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<!-- Buttons extension -->
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

<script>
    $(document).ready(function () {
        $('#pharmacyTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            order: [[0, 'desc']]
        });
    });
</script>
@endpush
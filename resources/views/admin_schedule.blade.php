@extends('admin')

@section('content')

<h1>Appointments</h1>
<a href="{{route('admin.patients.add')}}"><button class="btn btn-primary">
        ADD
    </button></a>
<!-- Table for larger screens -->
<div class="table-responsive d-none d-md-block">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($appointments as $appointment)
            @php
                $appointmentDateTime = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $appointment->appointment_date . ' ' . $appointment->appointment_time);
                $isPast = $appointmentDateTime->isPast();
            @endphp
            <tr class="{{ $isPast ? 'table-danger' : '' }}">
                <td>{{ $appointment->id }}</td>
                <td>{{ $appointment->patient->first_name }}</td>
                <td>{{ $appointment->patient->last_name }}</td>
                <td>{{ $appointment->appointment_date }}</td>
                <td>{{ $appointment->appointment_time }}</td>
                <td>{{ $isPast ? 'Past' : 'Upcoming' }}</td>
                <td>
                    <a href=""><button class="btn btn-info">Edit</button></a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#approveModal{{ $appointment->id }}">
                        Open Modal
                    </button>
                    <form action="{{ route('appointment.destroy', ['appointment' => $appointment->id]) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>

            <!-- Modal for Each Appointment -->
            <div class="modal fade" id="approveModal{{ $appointment->id }}" tabindex="-1" role="dialog" aria-labelledby="approveModalLabel{{ $appointment->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="approveModalLabel{{ $appointment->id }}">Approve Appointment</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to approve this appointment?</p>
                        </div>
                        <div class="modal-footer">
                            <form action="{{ route('appointment.approve', ['appointment' => $appointment->id]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-primary">Approve</button>
                            </form>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Cards for smaller screens -->
<div class="d-block d-md-none">
    @foreach($appointments as $appointment)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Patient ID: {{ $appointment->id }}</h5>
            <p class="card-text">
                <strong>First Name: </strong> {{$appointment->patient->first_name }}<br>
                <strong>Last Name: </strong> {{ $appointment->patient->last_name }}<br>
                <strong>Date: </strong> {{$appointment->appointment_date}}<br>
                <strong>Time: </strong> {{$appointment->appointment_time }}<br>
            </p>
        </div>
    </div>
    @endforeach
</div>

@endsection
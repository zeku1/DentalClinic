@extends('admin')

@section('content')

<h1>Schedule</h1>
<a href="{{secure_url('admin.patients.add')}}"><button class="btn btn-primary">
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
                <th scope="col">procedures</th>
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
                <td>
                    @foreach($appointment->procedures as $procedure)

                    <p>{{$procedure->procedure->name}}</p>

                    @endforeach
                </td>
                <td>{{ $appointment->appointment_date }}</td>
                <td>{{ $appointment->appointment_time }}</td>
                <td>{{ $isPast ? 'Past' : 'Upcoming' }}</td>
                <td>
                    <a href=""><button class="btn btn-info">Edit</button></a>
                    <form action="{{ secure_url('appointment.finished', ['appointment' => $appointment->id]) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-primary">done</button>
                    </form>
                    <form action="{{ secure_url('appointment.cancel', ['appointment' => $appointment->id]) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-danger">Remove</button>
                    </form>
                </td>
            </tr>

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
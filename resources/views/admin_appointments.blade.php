@extends('admin')

@section('content')

<h1>Appointments</h1>
<a href="{{route('appointment.create')}}"><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
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
            <tr>
                <td>{{ $appointment->id }}</td>
                <td>{{ $appointment->patient->first_name }}</td>
                <td>{{ $appointment->patient->last_name}}</td>
                <td>
                    @foreach($appointment->procedures as $procedure)

                    <p>{{$procedure->procedure->name}}</p>

                    @endforeach
                </td>
                <td>{{ $appointment->appointment_date }}</td>
                <td>{{ $appointment->appointment_time }}</td>
                <td>
                    <!-- <a href=""><button class="btn btn-info">
                            Edit
                        </button></a> -->
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        approve
                    </button>
                    <!-- Delete Form -->
                    <form action="{{secure_url('appointments/' .$appointment->id .'/delete')}}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Remove</button>
                    </form>
                </td>
            </tr>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Set dentist to proceed</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{secure_url('admin/appointments/'.$appointment->id.'/approve')}}" method="POST" style="display:inline;">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="dentistSelect">Select the dentist to do this procedure</label>
                                    <select class="form-control" id="dentistSelect" name="dentist_id">
                                        @foreach($dentists as $dentist)
                                        <option value="{{ $dentist->id }}">
                                            {{ ucfirst($dentist->first_name) }}, {{ ucfirst($dentist->last_name) }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Approve</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </tbody>
    </table>
</div>

<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Set dentist to proceed</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
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
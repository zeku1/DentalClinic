@extends('admin')

@section('content')

<h1>Patients</h1>
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
            <th scope="col">Age</th>
            <th scope="col">Number</th>
            <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($patients as $patient)
            <tr>
                <td>{{ $patient->id }}</td>
                <td>{{ $patient->last_name }}</td>
                <td>{{ $patient->first_name }}</td>
                <td>{{ $patient->age }}</td>
                <td>{{ $patient->number }}</td>
                <td>{{ $patient->email }}</td>
                <td>
                    <a href="{{route('admin.patients.edit',['patient' => $patient->id ])}}"><button class="btn btn-info">
                        edit
                    </button></a>
                    <form action="{{secure_url('admin/patients/' . $patient->id . '/destrtoy')}}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
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
    @foreach($patients as $patient)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Patient ID: {{ $patient->id }}</h5>
            <p class="card-text">
                <strong>First Name:</strong> {{ $patient->first_name }}<br>
                <strong>Last Name:</strong> {{ $patient->last_name }}<br>
                <strong>Age:</strong> {{ $patient->age }}<br>
                <strong>Number:</strong> {{ $patient->number }}<br>
                <strong>Address:</strong> {{ $patient->address }}<br>
                <strong>Email:</strong> {{ $patient->email }}
            </p>
        </div>
    </div>
    @endforeach
</div>

@endsection

@extends('admin')

@section('content')

<form action="{{ secure_url('client.submit')}}" method="POST" class="row g-3 fs-5">

    @csrf
    <legend>Add new Procedure</legend>
    
    <div class="col-md-6">
        <label for="first_name" class="form-label">First Name:</label>
        <input type="text" name="first_name" id="first_name" placeholder="Enter First Name" class="form-control">
    </div>

    <div class="col-md-6">
        <label for="last_name" class="form-label">Last Name:</label>
        <input type="text" name="last_name" id="last_name" placeholder="Enter Last Name" class="form-control">
    </div>

    <div class="col-md-6">
        <label for="age" class="form-label">Age:</label>
        <input type="text" name="age" id="age" placeholder="Enter Age" class="form-control">
    </div>

    <div class="col-md-6">
        <label for="address" class="form-label">Address:</label>
        <input type="text" name="address" id="address" placeholder="Enter Address" class="form-control">
    </div>

    <div class="col-md-6">
        <label for="number" class="form-label">Your Number:</label>
        <input type="number" name="number" id="number" placeholder="Enter Your Number" class="form-control">
    </div>

    <div class="col-md-6">
        <label for="email" class="form-label">Your Email:</label>
        <input type="email" name="email" id="email" placeholder="Enter Your Email" class="form-control">
    </div>

    <div class="col-12">
        <label class="form-label">Select Services:</label>
        @foreach($procedures as $procedure)
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="procedures[]" value="{{ $procedure->id }}" id="procedure{{ $procedure->id }}">
            <label class="form-check-label" for="procedure{{ $procedure->id }}">
                {{ $procedure->name }}
            </label>
        </div>
        @endforeach
    </div>

    <div class="col-md-6">
        <label for="appointment_date" class="form-label">Appointment Date:</label>
        <input type="date" name="appointment_date" id="appointment_date" class="form-control">
    </div>

    <div class="col-md-6">
        <label for="appointment_time" class="form-label">Appointment Time:</label>
        <input type="time" name="appointment_time" id="appointment_time" class="form-control">
    </div>

    <input type="text" value="">

    <div class="col-12 text-center">
        <button type="submit" name="submit" class="btn btn-primary">Make Appointment</button>
    </div>

</form>


@endsection
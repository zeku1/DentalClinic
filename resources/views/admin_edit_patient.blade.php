@extends('admin')

@section('content')

<form action="{{ secure_url('admin/patients/'.$patient->id.'/update') }}" method="POST" class="row" >
    @method('PUT')
    @csrf
    <fieldset>
        <legend>Edit Patient</legend>
        <div col-md-4>
            <label for="Last Name" class="form-label mt-4">Last Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" 
                name="last_name" placeholder="Enter Last Name" value="{{ $patient->last_name}}">
        </div>
        <div col-md-4>
            <label for="First Name" class="form-label mt-4">First Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" 
                name="first_name" placeholder="Enter first Name" value="{{ $patient->first_name}}">
        </div>
        <div col-md-4>
            <label for="email" class="form-label mt-4">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" 
                name="email" placeholder="Enter email" value="{{ $patient->email}}">
        </div>
        <div col-md-4>
            <label for="age" class="form-label mt-4">Age</label>
            <input type="number" class="form-control" id="exampleInputEmail1" 
                name="age" placeholder="Enter age" value="{{ $patient->age}}">
        </div>
        <div col-md-4 >
            <label for="number" class="form-label mt-4">Number</label>
            <input type="number" class="form-control" id="exampleInputEmail1" 
                name="number" placeholder="Enter Cellphone Number" value="{{ $patient->number}}">
        </div>
        <div col-md-4>
            <label for="number" class="form-label mt-4">Address</label>
            <input type="text" class="form-control" id="exampleInputEmail1" 
                name="address" placeholder="Enter Address" value="{{ $patient->address}}">
        </div>
        <div col-md-4>
            <label for="number" class="form-label mt-4"></label>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </fieldset>
</form>


@endsection
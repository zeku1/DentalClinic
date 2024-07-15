@extends('admin')

@section('content')

<form action="{{ route('admin.dentists.store') }}" method="POST">
    @csrf
    <fieldset>
        <legend>Add new Dentist</legend>
        <div>
            <label for="Last Name" class="form-label mt-4">Last Name</label>
            <input type="text" class="form-control" id="name" name="last_name" placeholder="Enter Last Name">
        </div>
        <div>
            <label for="First Name" class="form-label mt-4">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name"  placeholder="Enter First Name">
        </div>
        <div>
            <label for="First Name" class="form-label mt-4">Title</label>
            <input type="text" class="form-control" id="title" name="title"  placeholder="Enter Title">
        </div>
        <div>
            <label for="number" class="form-label mt-4"></label>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </fieldset>
</form>


@endsection
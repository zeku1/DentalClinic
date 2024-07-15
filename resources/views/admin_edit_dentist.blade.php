@extends('admin')

@section('content')

<form action="{{ route('admin.dentists.update',[ 'dentist' => $dentist->id ]) }}" method="POST">
    @method('PUT')
    @csrf
    <fieldset>
        <legend>Edit Dentist</legend>
        <div>
            <label for="Last Name" class="form-label mt-4">Last Name</label>
            <input type="text" class="form-control" id="name" name="last_name" 
                placeholder="Enter Last Name" value="{{$dentist->last_name}}">
        </div>
        <div>
            <label for="First Name" class="form-label mt-4">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name"  
                placeholder="Enter First" step="0.01" value="{{$dentist->first_name}}">
        </div>
        <div>
            <label for="Title" class="form-label mt-4">Title</label>
            <input type="text" class="form-control" id="title" name="title"  
                placeholder="Enter Title" value="{{$dentist->title}}">
        </div>
        <div>
            <label for="number" class="form-label mt-4"></label>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </fieldset>
</form>


@endsection
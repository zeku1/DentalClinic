@extends('admin')

@section('content')

<form action="{{ secure_url('admin/dentist/'. $dentist->id .'/update') }}" method="POST" class="row">
    @method('PUT')
    @csrf
    <fieldset>
        <legend>Edit Dentist</legend>
        <div col-md-4>
            <label for="Last Name" class="form-label mt-4">Last Name</label>
            <input type="text" class="form-control" id="name" name="last_name" 
                placeholder="Enter Last Name" value="{{$dentist->last_name}}">
        </div>
        <div col-md-4>
            <label for="First Name" class="form-label mt-4">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name"  
                placeholder="Enter First" step="0.01" value="{{$dentist->first_name}}">
        </div>
        <div col-md-4>
            <label for="Title" class="form-label mt-4">Title</label>
            <input type="text" class="form-control" id="title" name="title"  
                placeholder="Enter Title" value="{{$dentist->title}}">
        </div>
        <div col-md-4>
            <label for="number" class="form-label mt-4"></label>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </fieldset>
</form>


@endsection
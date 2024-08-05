@extends('admin')

@section('content')

<form action="{{ secure_url('admin/procedure/store') }}" method="POST" class="row">
    @csrf
    <fieldset>
        <legend>Add new Procedure</legend>
        <div class="col-md-4">
            <label for="Last Name" class="form-label mt-4">Procedure Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Product Name">
        </div>
        <div class="col-md-4">
            <label for="First Name" class="form-label mt-4">Price</label>
            <input type="number" class="form-control" id="price" name="price"  placeholder="Enter Price" step="0.01">
        </div>
        <div class="col-md-4">
            <label for="exampleTextarea" class="form-label mt-4">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" style="height: 89px;" placeholder="Enter the Description of the Procedure"></textarea>
        </div>

        <div class="col-md-4">
            <label for="number" class="form-label mt-4"></label>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </fieldset>
</form>


@endsection
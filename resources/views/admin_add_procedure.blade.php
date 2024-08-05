@extends('admin')

@section('content')

<form action="{{ secure_url('admin.procedures.store') }}" method="POST">
    @csrf
    <fieldset>
        <legend>Add new Procedure</legend>
        <div>
            <label for="Last Name" class="form-label mt-4">Procedure Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Product Name">
        </div>
        <div>
            <label for="First Name" class="form-label mt-4">Price</label>
            <input type="number" class="form-control" id="price" name="price"  placeholder="Enter Price" step="0.01">
        </div>
        <div>
            <label for="exampleTextarea" class="form-label mt-4">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" style="height: 89px;" placeholder="Enter the Description of the Procedure"></textarea>
        </div>

        <div>
            <label for="number" class="form-label mt-4"></label>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </fieldset>
</form>


@endsection
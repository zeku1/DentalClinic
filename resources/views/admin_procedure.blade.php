@extends('admin')

@section('content')

<h1> Procedures </h1>
<a href="{{route('admin.procedures.create')}}"><button class="btn btn-primary">
        ADD
    </button></a>
<!-- Table for larger screens -->
<div class="table-responsive d-none d-md-block">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Procedure Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>

            </tr>
        </thead>
        <tbody>
            @foreach($procedures as $procedure)
            <tr>
                <td>{{ $procedure->id }}</td>
                <td>{{ $procedure->name }}</td>
                <td>{{ $procedure->description}}</td>
                <td>{{ $procedure->price}}</td>
                <td>
                    <a href="{{ route('admin.procedures.edit',['procedure' => $procedure->id]) }}">
                        <button class="btn btn-info">
                            edit
                        </button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Cards for smaller screens -->
<div class="d-block d-md-none">
    @foreach($procedures as $procedure)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">ID: {{ $procedure->id }}</h5>
            <p class="card-text">
                <strong>Name: </strong> {{$procedure->name }}<br>
                <strong>Description: </strong> {{ $procedure->description}}<br>
            </p>
            <a href="{{ route('admin.procedures.edit',['procedure' => $procedure->id]) }}">
                <button class="btn btn-info">
                    edit
                </button>
            </a>
        </div>
    </div>
    @endforeach
</div>

@endsection
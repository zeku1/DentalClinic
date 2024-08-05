@extends('admin')

@section('content')

<h1> Dentist </h1>
<a href="{{route('admin.dentists.create')}}"><button class="btn btn-primary">
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
            <th scope="col">Title</th>

            </tr>
        </thead>
        <tbody>
            @foreach($dentists as $dentist)
            <tr>
                <td>{{ $dentist->id }}</td>
                <td>{{ $dentist->last_name }}</td>
                <td>{{ $dentist->first_name}}</td>
                <td>{{ $dentist->title}}</td>
                <td>
                    <a href="{{ route('admin.dentists.edit',['dentist' => $dentist->id]) }}"><button class="btn btn-info">
                        edit
                    </button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Cards for smaller screens -->
<div class="d-block d-md-none">
    @foreach($dentists as $dentist)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">ID: {{ $dentist->id }}</h5>
            <p class="card-text">
                <strong>First Name: </strong> {{$dentist->first_name }}<br>
                <strong>Last Name: </strong> {{$dentist->last_name }}<br>
                <strong>title: </strong> {{ $dentist->title}}<br>
            </p>
            <a href="{{ route('admin.dentists.edit',['dentist' => $dentist->id]) }}">
                <button class="btn btn-info">
                        edit
                </button>
            </a>
        </div>
    </div>
    @endforeach
</div>

@endsection

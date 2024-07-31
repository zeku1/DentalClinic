@extends('admin')

@section('content')

<h1>Payments</h1>
<!-- Table for larger screens -->
<div class="table-responsive d-none d-md-block">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Appointment Id</th>
                <th scope="col">Client Name</th>
                <th scope="col">Procedures</th>
                <th scope="col">Amount</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($payments as $payment)
            <tr>
                <td>{{ $payment->id }}</td>
                <td>{{ $payment->appointment->id }}</td>
                <td>{{ $payment->appointment->patient->last_name }} , {{$payment->appointment->patient->first_name}}</td>
                <td>
                    @foreach($payment->appointment->procedures as $procedure)

                    <p>{{$procedure->procedure->name}}</p>

                    @endforeach
                </td>
                <td>{{ $payment->amount}}</td>
                <td>{{ $payment->paid}}</td>
                <td>

                    <form action="{{ route('payment.paid', ['payments' => $payment->id]) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-primary">Paid</button>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>

<!-- Cards for smaller screens -->
<div class="d-block d-md-none">
    @foreach($payments as $payment)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Appointment Id: {{$payment->id }}</h5>
            <p class="card-text">
                <strong>Appointment Id </strong> {{$payment->appointment->id}}<br>
                <strong>Client Name: </strong> {{ $payment->appointment->patient->last_name }} , {{$payment->appointment->patient->first_name}}<br>
                <strong>Amount </strong> {{ $payment->amount}}<br>
                <strong>Status</strong> {{ $payment->paid}}<br>
            </p>
        </div>
    </div>
    @endforeach
</div>

@endsection
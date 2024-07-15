
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPOINTMENTS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- <style>
      body {
        background: url("{{ asset('img/admin.pnl.jpg') }}") no-repeat;
        background-size: cover;
        background-position: center;
        height: 100vh;
        margin: 0;
        padding: 0;
      }

      label {
        font-family: 'Merriweather', sans-serif;
        font-size: 20px;
        color: black;
        text-align: left;
      }

      .login-container h1{
          font-size: 50px;
          font-weight: bold;
          text-align: center;
          margin-top: 50px;
          margin-bottom: 50px;
      }

      table {
        font-family: 'Merriweather', sans-serif;
        font-size: 20px;
        color: black;
        border-collapse: collapse;
        width: 100%;
        border: 3px solid black;
        text-align: center;
      }

      th, td {
        border: 3px solid black;
        padding: 15px;
      }

      .button-container {
        color: black;
        font-family: 'Merriweather', sans-serif;
        text-align: center;
      }

      .btn-primary {
        background-color: transparent;
        border-color: transparent;
        color: green;
        font-family: 'Merriweather', sans-serif;
        font-size: 20px;
      }

      .btn-danger {
        background-color: transparent;
        border-color: transparent;
        color: red;
        font-family: 'Merriweather', sans-serif;
        font-size: 20px;
      }

      .btn-secondary{
        background-color: transparent;
        border-color: transparent;
        color: blue;
        font-family: 'Merriweather', sans-serif;
        font-size: 20px;
      }

      .form-group {
        font-family: 'Merriweather', sans-serif;
        font-size: 20px;
        margin-bottom: 20px;
        margin-left: 20px;
      }

      .form-group label {
        font-family: 'Merriweather', sans-serif;
        font-size: 20px;
        margin-bottom: 20px;
        font-weight: bold;
      }

      .form-control {
        width: 90%;
        font-size: 20px;
        padding: 10px 20px;
        height: auto; 
      }
    </style> -->
</head>
<body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link btn btn-secondary" href="admin_panel.php"><b>Back</b></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link btn btn-danger" href="admin_login.php"><b>Log Out</b></a>
      </li>
    </ul>
  </nav>

  <div class="container">
    <div class="login-container">
        <h1 class="text-center mb-4">APPOINTMENTS</h1>
    </div>

    <!-- Add Button -->
    <br>
    <br>
    <br>
    <div class="button-container">
      <div class="row justify-content-center">
        <div class="col-md-6">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          ADD
        </button>
        </div>
      </div>
    </div>
      <table border='1'>
        <tr>
          <th>Appointment ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Procedures</th>
          <th>Appointment Date</th>
          <th>Appointment Time</th>
          <th>Scheduled</th>
        </tr>
 
      @foreach($appointments as $appointment)
        <tr>
          <td>{{$appointment->id}}</td>
          <td>{{$appointment->patient->first_name}}</td>
          <td>{{$appointment->patient->last_name}}</td>
          <td>{{$appointment->procedures}}</td>
          <td>{{$appointment->appointment_date}}</td>
          <td>{{$appointment->appointment_time}}</td>
          <td>{{$appointment->approved}}</td>
          <td>
            <form action="/admin/appointments/approve" method="POST">
                @csrf
                @method('PUT')
                <input hidden value="{{$appointment->id}}" name="id">
                <button type="submit" class="btn-primary">submit</button>
            </form>
          </td>
        </tr>
      @endforeach
    </table>


  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
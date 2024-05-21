
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPOINTMENTS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
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
    </style>
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

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <h1 class="heading">make appointment</h1>

            <form action="controller/appointment.php" method="POST">
                <?php
                    if(isset($message)){
                        echo '<p class="message">'.$message.'</p>';
                    }
                ?>
                <span>First Name:</span>
                <input type="text" name="firstname" placeholder="" class="box">
                
                <span>Last Name:</span>
                <input type="text" name="lastname" placeholder="" class="box">

                <span>Age:</span>
                <input type="text" name="age" placeholder="" class="box">

                <span>address:</span>
                <input type="text" name="address" placeholder="" class="box">

                <!-- <span>Services :</span>

                <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
                <label class="btn btn-secondary" for="option1">Checked</label>

                <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                <label class="btn btn-secondary" for="option2">Radio</label>


                <input type="radio" class="btn-check" name="options" id="option4" autocomplete="off">
                <label class="btn btn-secondary" for="option4">Radio</label> -->

                <!-- <select name="Services" class="box">
                    <option value="dental_bonding"> </option>
                    <option value="dental_bonding">Dental Bonding - P3,000</option>
                    <option value="dental_crowns">Dental Crowns - P5,000</option>
                    <option value="bridgework">Bridgework - P3,000</option>
                    <option value="cosmetic_fillings">Cosmetic Fillings - P7,000</option>
                    <option value="root_canal_therapy">Root Canal Therapy - P9,000</option>
                    <option value="invisalign">Invisalign - P8,000</option>
                    <option value="dental_veneers">Dental Veneers - P8,000</option>
                    <option value="teeth_cleanings">Teeth Cleanings - P2,000</option>
                    <option value="dentures">Dentures - P4,000</option>
                    <option value="teeth_whitening">Teeth Whitening - P5,000</option>
                    <option value="tooth_extractions">Tooth Extractions - 8,000</option>
                </select> -->
                <!-- <span>your email :</span>
                <input type="email" name="email" placeholder="" class="box"> -->

                <span>your number:</span>
                <input type="number" name="number" placeholder="" class="box">

                <span>appointment date:</span>
                <input type="datetime-local" name="date" class="box">

                <button type="submit" name="submit" class="link-btn">
                    make appointment
                </button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
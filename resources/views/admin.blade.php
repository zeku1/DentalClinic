<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/minty/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
    <style>
        body {
            display: flex;
            height: 100vh;
            overflow-x: hidden;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #f8f9fa;
            position: fixed;
            left: 0;
            transition: transform 0.3s ease;
            z-index: 1040; /* Ensure the sidebar is above other content but below the navbar */
        }
        .sidebar.collapsed {
            transform: translateX(-250px);
        }
        .content {
            flex-grow: 1;
            margin-left: 250px;
            padding: 20px;
            transition: margin-left 0.3s ease;
        }
        body.collapsed .content {
            margin-left: 0;
        }
        .navbar-toggler {
            margin-left: auto;
        }
        .navbar {
            /* z-index: 1050; Ensures the navbar stays in front */
            background-color: #007bff; /* Adding background color to ensure visibility */
        }
        .nav-link {
            color: white;
        }
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-250px);
            }
            body.collapsed .sidebar {
                transform: translateX(0);
            }
            .content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <div class="sidebar bg-primary text-light border-right" id="sidebar">
        <div class="d-flex flex-column align-items-center p-3 border-bottom">
            <img src="https://picsum.photos/100" class="rounded-circle mb-3" alt="Administrator">
            <p>Administrator</p>
            <p>{{Auth::user()->email}}</p>
            <form action="{{ secure_url('admin/logout') }}" method="POST">
                @csrf
                <button class="btn btn-light mb-4" type="submit">Log out</button>
            </form>
            
        </div>
        <nav class="nav flex-column">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a class="nav-link" href="{{ route('admin.patients') }}">Patients</a>
            <a class="nav-link" href="{{ route('admin.dentists') }}">Dentist</a>
            <a class="nav-link" href="{{ route('admin.schedule') }}">Schedule</a>
            <a class="nav-link" href="{{ route('admin.appointments') }}">Appointments</a>
            <a class="nav-link" href="{{ route('admin.procedures') }}">Appointments</a>
            <a class="nav-link" href="{{ route('payment.index') }}">Payments</a>
        </nav>
    </div>

    <div class="content" id="content">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary w-100">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="{{ route('admin.dashboard') }}">Admin Panel</a>
                <button class="navbar-toggler" type="button" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        @if(session('error'))
            <div class="alert alert-dismissible alert-danger">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Oh snap!</strong> {{ session('error') }}
            </div>
        @endif

        @if(session('message'))
            <div class="alert alert-dismissible alert-success">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Well done</strong> {{ session('message') }}
            </div>
        @endif

        @yield('content')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

        <!-- Bootstrap JS and Popper.js -->

    <script>
        document.querySelector('.navbar-toggler').addEventListener('click', function () {
            document.querySelector('.sidebar').classList.toggle('collapsed');
            document.body.classList.toggle('collapsed');
        });

        window.addEventListener('resize', function () {
            if (window.innerWidth < 768) {
                document.querySelector('.sidebar').classList.add('collapsed');
                document.body.classList.add('collapsed');
            } else {
                document.querySelector('.sidebar').classList.remove('collapsed');
                document.body.classList.remove('collapsed');
            }

            if (window.innerWidth < 768) {
                document.querySelector('.sidebar').classList.add('collapsed');
                document.body.classList.add('collapsed');
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            // Function to close alert
            function closeAlert(button) {
                const alertDiv = button.parentElement;
                alertDiv.style.transition = "opacity 0.5s";
                alertDiv.style.opacity = "0";
                
                setTimeout(() => {
                    alertDiv.remove();
                }, 500); // Matches the transition duration
            }

            // Add event listener to close button
            const closeButtons = document.querySelectorAll('.btn-close');
            closeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    closeAlert(button);
                });
            });
        });
    </script>
</body>
</html>

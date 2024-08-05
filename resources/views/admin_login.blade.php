
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: url("img/logins.bg.jpg") no-repeat;
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            width: 70%;
            max-width: 400px;
            padding: 30px;
            border-radius: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            background: rgba(255, 255, 255, 0.8);
        }

        .login-container h1 {
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-top: 10px;
            font-size: 1rem;
        }

        .form-group {
            margin-top: 20px;
            margin-bottom: 25px;
            text-align: left;
        }

        .form-group label {
            margin-top: 20px;
            font-size: 1rem;
            font-weight: bold;
            display: block;
        }

        .form-control {
            width: 100%;
            padding: 12px 20px;
            font-size: 1.3rem;
            border-radius: 5px;
        }

        .btn-container {
            text-align: center;
            margin-top: 30px;
        }

        .btn-primary,
        .btn-secondary {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            background-color: transparent;
            border-color: transparent;
            font-weight: bold;
            color: black;
            font-size: 1.3rem;
            margin: 5px;
        }

        @media (max-width: 576px) {
            .login-container {
                width: 100%;
                padding: 20px;
            }

            .login-container h1 {
                font-size: 1.5rem;
            }

            .logo img {
                width: 100px;
                height: 100px;
            }

            .form-group label {
                font-size: 0.875rem;
            }

            .form-control {
                font-size: 0.875rem;
            }

            .btn-primary,
            .btn-secondary {
                font-size: 0.875rem;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1 class="text-center mb-4">Admin Login</h1>
        <div class="logo">
            <img src="img/logo2.png" alt="Logo">
        </div>

        <form  action="{{ secure_url('/login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="username">USERNAME:</label>
                <input type="email" class="form-control" id="username" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">PASSWORD:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="btn-container">
                <input type="submit" class="btn btn-primary" value="Login">
                <a href="{{secure_url('/')}}"> <button type="button" class="btn btn-secondary">Cancel</button></a>
            </div>
        </form>
    </div>

    <script>
        function goToMainPage() {
            window.location.href = "dashboard.php";
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

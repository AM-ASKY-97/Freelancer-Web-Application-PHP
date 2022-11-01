<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap Elegant Account Login Form with Avatar Icon</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="css/login.css">

    <style>
        .error {
            color: #F00;
        }
    </style>

</head>

<body>
    <div class="login-form">

        <div class="text-danger" id="messageError"></div>

        <form id="loginForm">
            <div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
            <span class="title">Login</span><br><br>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="User Name" id="userName" name="userName">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                <div class="text-danger" id="messagePassword"></div>
            </div>
            <div class="form-group small clearfix">
                <label class="form-check-label"><input type="checkbox"> Remember me</label>
                <a href="#" class="forgot-link">Forgot Password?</a>
            </div>
            <button type="submit" class="btn btn-primary btn-block btn-lg text-white login"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>

            <div class="text-center small mt-3">Don't have an account? <a href="Registration.php">Register Now</a></div>
        </form>

    </div>

    <!-- Js Files -->
    <script src="my_script.js"></script>
    <script src="js/validation/jquery.validate.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
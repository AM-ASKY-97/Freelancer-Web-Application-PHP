<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Registration Form </title>
    <link rel="stylesheet" href="css/style Reg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="css/Registration.css">

    <style>
        .error {
            color: red !important;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="title">Registration</div>
        <div class="content">
            <form action="#" id="Siform">
                <div class="user-details">

                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter your name" id="fullName" name="fullName">
                    </div>

                    <div class="input-box">
                        <span class="details">Registration Number</span>
                        <input type="text" placeholder="Enter your Registration Number" name="regNo" id="regNo">
                    </div>

                    <div class="input-box">
                        <span class="details">Address</span>
                        <input type="text" placeholder="Enter your Address" name="address" id="address">
                    </div>

                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" placeholder="Enter your Email" id="email" name="email">
                    </div>

                    <div class="input-box">
                        <span class="details">Date of Birth</span>
                        <input type="date" placeholder="Enter your Date of Birth" id="dob" name="dob">
                    </div>

                    <div class="input-box">
                        <span class="details">NIC</span>
                        <input type="text" placeholder="Enter your NIC" id="nic" name="nic">
                    </div>

                    <div class="input-box">
                        <span class="details">Contact Number</span>
                        <input type="text" placeholder="Enter Your Contact Number" id="phone" name="phone">
                    </div>
                </div>



                <div class="gender-details">
                    <input type="radio" name="gender" id="dot-1" value="Male">
                    <input type="radio" name="gender" id="dot-2" value="Female">
                    <input type="radio" name="gender" id="dot-3" value="other">
                    <span class="gender-title">Gender</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>

                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Female</span>
                        </label>



                        <label for="dot-3">
                            <span class="dot three"></span>
                            <span class="gender">Prefer not to say</span>
                        </label>
                    </div>
                </div>


                <div class="button">
                    <input type="submit" value="Register" class="singup">
                </div>


            </form>

            <div class="login-signup">
                <span class="text">Already Registerd?
                    <a class="nav-link" href="index.php">Login</a>
                </span>
            </div>
        </div>
    </div>

    <script src="my_script.js"></script>
    <script src="js/validation/jquery.validate.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
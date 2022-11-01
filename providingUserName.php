<?php
include 'PHP/conn.php';

$nic = $_GET['nic'];

$sql = "SELECT * FROM registration WHERE nic = '$nic'";

$result = mysqli_query($con, $sql);

$row = mysqli_fetch_array($result);
?>


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col p-3 bg-info ">
                <h1 class="text-white text-center">Providing User Name and Password</h1>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col pt-5">
                    <form id="updateForm">
                        <div class="form-row">
                            <input type="text" class="form-control" value="<?php echo $row['nic'] ?>" name="nic" hidden>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" value="<?php echo $row['email'] ?>" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Full Name</label>
                                <input type="text" class="form-control" placeholder="Full Name" value="<?php echo $row['fullName'] ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" value="<?php echo $row['address'] ?>" disabled>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">User Name</label>
                                <input type="text" class="form-control" placeholder="User Name" name="userName" id="userName" value="<?php echo $row['userName'] ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password" id="password" value="<?php echo $row['password'] ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputAddress">Access</label><br>
                            <div class="form-check-inline">
                                <label class="form-check-label" for="radio1">
                                    <input type="radio" class="form-check-input" id="radio1" name="access" value="1" <?php if ($row['access'] == '1') echo 'checked' ?>>Enable
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label" for="radio2">
                                    <input type="radio" class="form-check-input" id="radio2" name="access" value="0" <?php if ($row['access'] == '0') echo 'checked' ?>>Disable
                                </label>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary provide">update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="my_script.js"></script>
    <script src="js/validation/jquery.validate.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
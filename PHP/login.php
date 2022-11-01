<?php
session_start();
?>

<?php
include 'conn.php';

$name = $_POST['userName'];
$pass = $_POST['password'];

$Sql = "SELECT * FROM registration WHERE userName='$name' AND password='$pass'";

$result = mysqli_query($con, $Sql);

$count = mysqli_num_rows($result);

if ($count == 1) {
    $role = mysqli_fetch_array($result);

    if ($role['access']== '1')
    {
        if ($role['role'] == "1") {
            echo "admin";
            exit();
        } elseif ($role['role'] == "0") {
            echo "user";
            $_SESSION["name"]=$name;
            exit();
        }
    }

    else{
        echo "Admin disabled your account";
    }
} else {
    echo "Invalid Username or Password !";
}

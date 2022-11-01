<?php
    include 'conn.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    
    $sql = "INSERT INTO student(name, email, address, phone) VALUES ('$name', '$email', '$address', '$phone')";

    if (mysqli_query($con, $sql))
    {
        echo "<span class='text-success'>Record Successfully Addedd</span>";
    }

    else
    {
        echo "<span class='text-danger'>Record Successfully Addedd</span>";
    }
?>
<?php
    include 'conn.php';

    $nic = $_POST['nic'];

    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $access = $_POST['access'];
    
    $sql = "UPDATE registration SET userName='$userName', password= '$password', access='$access' WHERE nic = '$nic'";

    if (mysqli_query($con, $sql))
    {
        echo "<span class='text-success'>Record Successfully Updated</span>";
    }

    else
    {
        echo "<span class='text-danger'>Record Successfully Addedd</span>";
    }

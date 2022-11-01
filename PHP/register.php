<?php
include 'conn.php';

$nic = $_POST['nic'];
$regNo = $_POST['regNo'];
$fullName = $_POST['fullName'];
$address = $_POST['address'];
$dobi = $_POST['dob'];
$genderi = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];



$len = strlen($nic);

if ($len == 12 || $len == 10) {
    $unic = $nic;
}


if ($len == 12) {
    $yaer = substr($nic, 0, 4);

    $month = substr($nic, 4, 3);
    if ($month > 500) {
        $month = $month - 500;
        $gender = "Female";
    } else {
        $gender = "Male";
    }
    if ($month >= 0 && $month <= 31) {
        $day = $month - 31;
        $month = 01;
    } else if ($month >= 32 && $month <= 59) {
        $day = $month - 32;
        $month = 02;
    } else if ($month >= 60 && $month <= 90) {
        $day = $month - 60;
        $month = 03;
    } else if ($month >= 91 && $month <= 120) {
        $day = $month - 91;
        $month = 04;
    } else if ($month >= 121 && $month <= 151) {
        $day = $month - 121;
        $month = 05;
    } else if ($month >= 152 && $month <= 181) {
        $day = $month - 152;
        $month = 06;
    } else if ($month >= 182 && $month <= 212) {
        $day = $month - 182;
        $month = 07;
    } else if ($month >= 213 && $month <= 243) {
        $day = $month - 213;
        $month = 8;
    } else if ($month >= 244 && $month <= 273) {
        $day = $month - 244;
        $month = 9;;
    } else if ($month >= 274 && $month <= 304) {
        $day = $month - 274;
        $month = 10;
    } else if ($month >= 305 && $month <= 334) {
        $day = $month - 305;
        $month = 11;
    } else if ($month >= 335 && $month <= 366) {
        $day = $month - 335;
        $month = 12;
    }
} else if ($len == 10) {
    $oldnic = substr($nic, 0, 2);
    $yaer = $oldnic + 1900;


    $month = substr($nic, 2, 3);
    if ($month > 500) {
        $month = $month - 500;
        $gender = "Female";
    } else {
        $gender = "Male";
    }
    if ($month >= 0 && $month <= 31) {
        $day = $month - 0;
        $month = 01;
    } else if ($month >= 32 && $month <= 59) {
        $day = $month - 32;
        $month = 02;
    } else if ($month >= 60 && $month <= 90) {
        $day = $month - 60;
        $month = 03;
    } else if ($month >= 91 && $month <= 120) {
        $day = $month - 91;
        $month = 04;
    } else if ($month >= 121 && $month <= 151) {
        $day = $month - 121;
        $month = 05;
    } else if ($month >= 152 && $month <= 181) {
        $day = $month - 152;
        $month = 06;
    } else if ($month >= 182 && $month <= 212) {
        $day = $month - 182;
        $month = 07;
    } else if ($month >= 213 && $month <= 243) {
        $day = $month - 213;
        $month = "08";
    } else if ($month >= 244 && $month <= 273) {
        $day = $month - 244;
        $month = "09";
    } else if ($month >= 274 && $month <= 304) {
        $day = $month - 274;
        $month = 10;
    } else if ($month >= 305 && $month <= 334) {
        $day = $month - 305;
        $month = 11;
    } else if ($month >= 335 && $month <= 366) {
        $day = $month - 335;
        $month = 12;
    }
} else {
    echo "This is an Invalid NIC number !";
}

if ($len == 12 || $len == 10) {
    $hours_in_day   = 24;
    $minutes_in_hour = 60;
    $seconds_in_mins = 60;

    $birth_date     = new DateTime($yaer . "-" . $month . "-" . $day);
    $current_date   = new DateTime();

    $diff           = $birth_date->diff($current_date);

    $years     = $diff->y;
    $m         = $diff->m;
    $d         = $diff->d;
}

$dobb = $month."/".$day."/".$yaer ;

if (strtotime($dobi) == strtotime($dobb)) {
    if (strcmp($gender, $genderi) !== 0) {
        echo "Gender should Match with NIC";
    }

    else{
        $sql = "INSERT INTO registration(nic, fullName, regNo, address, email, phone, dob, gender) VALUES ('$nic', '$fullName', '$regNo', '$address', '$email', '$phone', '$dobi', '$gender')";

        if (mysqli_query($con, $sql)) {
            echo 'New registration successfully Added';
        } else {
            echo "Error " . mysqli_error($con);
        }
        
    }
}

else{
    echo "DOB should Match with NIC";
}

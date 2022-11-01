<?php
include 'conn.php';

$sql = "SELECT * FROM registration";

$result = mysqli_query($con, $sql);

if ($result->num_rows > 0) {
    $i = 0;
    while ($row = mysqli_fetch_array($result)) {
        $i++;
?>
        <tr>
            <td> <?php echo $i ?> </td>
            <td> <?php echo $row['nic'] ?> </td>
            <td> <?php echo $row['fullName'] ?> </td>
            <td> <?php echo $row['address'] ?> </td>
            <td> <?php echo $row['email'] ?> </td>
            <td> <?php

                    if ($row['access'] === "1") {
                    ?>
                    <a href="#" class="badge badge-pill badge-success">Enable</a>
                <?php
                    } else {
                ?>
                    <a href="#" class="badge badge-pill badge-danger">Disable</a>

                <?php
                    }

                ?>
            </td>
            <td> <?php echo $row['userName'] ?> </td>
            <td> <?php echo $row['password'] ?> </td>
            <td>
                <a href="providingUserName.php?nic=<?php echo $row['nic'] ?>" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                <a href="<?php echo $row['nic'] ?>" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
            </td>
        </tr>
<?php
    }
} else {
    echo "No Record";
}

?>
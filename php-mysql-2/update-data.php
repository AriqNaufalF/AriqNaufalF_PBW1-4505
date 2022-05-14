<?php
include('config.php');

$sql = "UPDATE $tContact SET email='mary@example.com' WHERE idcontact=2;";

if (mysqli_query($conn, $sql)) {
    echo "Record Updated";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

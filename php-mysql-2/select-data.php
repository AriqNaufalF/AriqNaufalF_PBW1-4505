<?php
include("config.php");

echo "<h4>Select Data</h4>";
$sql = "SELECT idcontact, firstname, email FROM $tContact;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    foreach ($result as $data) {
        echo "id: " . $data['idcontact'] . " - name: " . $data['firstname'] . " - email: " . $data['email'] . "<br>";
    }
} else {
    echo "Result 0";
}

echo "<h4>Limit Data Selection</h4>";

// limit data selection
$sql = "SELECT * FROM $tContact LIMIT 2;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    foreach ($result as $data) {
        echo "id: " . $data['idcontact'] . " - firstname: " . $data['firstname'] . " - lastname: " . $data['lastname'] . " - email: " . $data['email'] . "<br>";
    }
} else {
    echo "Result 0";
}

echo "<h4>Select Data Where The Lastname Is Moe</h4>";
$sql = "SELECT * FROM $tContact WHERE lastname='moe';";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    foreach ($result as $data) {
        echo "id: " . $data['idcontact'] . " - firstname: " . $data['firstname'] . " - lastname: " . $data['lastname'] . " - email: " . $data['email'] . "<br>";
    }
} else {
    echo "Result 0";
}

echo "<h4>Select Data Order by Firstname</h4>";
$sql = "SELECT * FROM $tContact ORDER BY firstname;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    foreach ($result as $data) {
        echo "id: " . $data['idcontact'] . " - firstname: " . $data['firstname'] . " - lastname: " . $data['lastname'] . " - email: " . $data['email'] . "<br>";
    }
} else {
    echo "Result 0";
}


// create data to database
// $sql = "INSERT INTO contact (firstname, lastname, email)
//         VALUES ('John', 'Doe', 'jonh@example.com');";
// $sql .= "INSERT INTO contact (firstname, lastname, email)
//         VALUES ('Mary', 'Moe', 'moe@example.com');";
// $sql .= "INSERT INTO contact (firstname, lastname, email)
//         VALUES ('Julie', 'Dolley', 'judo@example.com');";
// $sql .= "INSERT INTO contact (firstname, lastname, email)
//         VALUES ('Cody', 'Fisher', 'fish@example.com');";
// $sql .= "INSERT INTO contact (firstname, lastname, email)
//         VALUES ('Atonio', 'Mark', 'anton@example.com');";


// if (!$conn->multi_query($sql) === true) {
//     return "success";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();
?>

<a href="delete-data.php">To delete page</a>
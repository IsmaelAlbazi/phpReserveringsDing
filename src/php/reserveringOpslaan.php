<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservation";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$naam = $_POST['naam'];
$datum = $_POST['datum'];
$tijd = $_POST['tijd'];
$kapper = $_POST['kapper'];

$sql = "INSERT INTO reservering (naam, datum, tijd, kapper)
VALUES ('$naam', '$datum', '$tijd', '$kapper')";

if (mysqli_query($conn, $sql)) {
    echo "Je reservering is succesvol geplaatst";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 
<?php
$sql = "INSERT INTO reservering (naam, datum, tijd, kapper)
VALUES ($name, $date, $time, $kapper)";

if (mysqli_query($conn, $sql)) {
    echo "Je reservering is succesvol geplaatst";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
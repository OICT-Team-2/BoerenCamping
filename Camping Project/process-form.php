<?php
$servername = "camping_database";
$username = "max";
$password = "Max=12345";
$dbname = "reservation_data";

// Connectie creëren
$conn = new mysqli($servername, $username, $password, $dbname);

// Connectie checken
if ($conn->connect_error) {
    die("Connectie mislukt: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $voornaam = $_POST["voornaam"];
    $achternaam = $_POST["achternaam"];

    // Data in de database zetten
    $sql = "INSERT INTO people (voornaam, achternaam) VALUES ('$voornaam', '$achternaam')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Nieuwe registratie aangemaakt";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
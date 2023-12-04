<?php
$servername = "localhost";
$username = "max";
$password = "Max=12345";
$dbname = "camping_database";

// Connectie creëren
$conn = new mysqli($servername, $username, $password, $dbname);

// Connectie checken
if ($conn->connect_error) {
    die("Connectie mislukt: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $voornaam = $_POST["voornaam"];
    $achternaam = $_POST["achternaam"];
    $plaats = $_POST["plaats"];
    $postcode = $_POST["postcode"];
    $straatnaam = $_POST["straatnaam"];
    $huisnummer = $_POST["huisnummer"];
    $telefoonnummer = $_POST["telefoonnummer"];
    $email = $_POST["email"];

    // Data in de database zetten
    $sql = "INSERT INTO reservation_data (voornaam, achternaam, straatnaam, plaats, postcode, huisnummer, telefoonnummer, email) VALUES ('$voornaam', '$achternaam', '$straatnaam', '$plaats', '$postcode', '$huisnummer', '$telefoonnummer', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Nieuwe registratie aangemaakt";
        sleep(3);

        // Redirect to a specific URL
        header("Location: index.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
exit();
?>
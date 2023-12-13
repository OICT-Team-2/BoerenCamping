<?php
$servername = "localhost";
$username = "max";
$password = "Max=12345";
$dbname = "camping_database";

try {
    // Connectie creëren
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Zet de PDO error modus naar "exception"
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $voornaam = $_POST["voornaam"];
        $achternaam = $_POST["achternaam"];
        $plaats = $_POST["plaats"];
        $postcode = $_POST["postcode"];
        $straatnaam = $_POST["straatnaam"];
        $huisnummer = $_POST["huisnummer"];
        $telefoonnummer = $_POST["telefoonnummer"];
        $email = $_POST["email"];

        // Prepareer een SQL statement
        $stmt = $conn->prepare("INSERT INTO reservation_data (voornaam, achternaam, straatnaam, plaats, postcode, huisnummer, telefoonnummer, email) 
        VALUES (:voornaam, :achternaam, :straatnaam, :plaats, :postcode, :huisnummer, :telefoonnummer, :email)");

        // Bind parameters
        $stmt->bindParam(':voornaam', $voornaam);
        $stmt->bindParam(':achternaam', $achternaam);
        $stmt->bindParam(':plaats', $plaats);
        $stmt->bindParam(':postcode', $postcode);
        $stmt->bindParam(':straatnaam', $straatnaam);
        $stmt->bindParam(':huisnummer', $huisnummer);
        $stmt->bindParam(':telefoonnummer', $telefoonnummer);
        $stmt->bindParam(':email', $email);

        // Voer het statement uit
        $stmt->execute();

        echo "Nieuwe registratie aangemaakt";
        sleep(3);

        // Doorverwijzen naar home(?)
        header("Location: index.html");
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Sluit de connectie
$conn = null;
exit();
?>

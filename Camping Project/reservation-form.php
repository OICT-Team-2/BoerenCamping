<?php
$servername = "localhost";
$username = "max";
$password = "Max=12345";
$dbname = "camping_database";
$table = "reservation_data";

try {
    // Connectie creëren
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Zet de PDO error modus naar "exception"
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $aantal = $_POST["aantal"];
        $type = $_POST["type"];
        $aankomst = $_POST["aankomst"];
        $vertrek = $_POST["vertrek"];

        // Prepareer een SQL statement
        $stmt = $conn->prepare("INSERT INTO $table (aantalpersonen, type, aankomst, vertrek) 
        VALUES (:aantal, :type, :aankomst, :vertrek)");

        // Bind parameters
        $stmt->bindParam(':aantal', $aantal);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':aankomst', $aankomst);
        $stmt->bindParam(':vertrek', $vertrek);

        // Voer het statement uit
        $stmt->execute();

        // User feedback
        // echo ("Nieuwe registratie aangemaakt");

        // Doorverwijzen naar klantgegevens
        header("Location: klantgegevens2.php");
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Sluit de connectie
$conn = null;
exit();
?>
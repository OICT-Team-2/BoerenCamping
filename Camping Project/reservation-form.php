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
        if (is_int($aantal)) {
            $stmt->bindParam(':aantal', $aantal);
        } else {
            echo ("Wrong value type inserted.");
            exit();
        }
        $stmt->bindParam(':type', $type);
        // Validate Input aankomst/vertrek
        $stmt->bindParam(':aankomst', $aankomst);
        $stmt->bindParam(':vertrek', $vertrek);

        // Voer het statement uit
        $stmt->execute();

        // User feedback
        // echo ("Nieuwe registratie aangemaakt");

        // Doorverwijzen naar klantgegevens
        header("Location: klantgegevens.html");
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Sluit de connectie
$conn = null;
exit();
?>
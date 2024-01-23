<?php

try {
    $conn = require_once('./db_conn.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $aantal = $_POST["aantal"];
        $type = $_POST["type"];
        $aankomst = $_POST["aankomst"];
        $vertrek = $_POST["vertrek"];

        // Prepareer een SQL statement
        $stmt = $conn->prepare("INSERT INTO reservation_data (aantalpersonen, type, aankomst, vertrek) VALUES (:aantal, :type, :aankomst, :vertrek)");

        // include("beschikbaarheid-check.php");  

        // isBookingDatumBeschikbaar($aankomst, $vertrek);

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

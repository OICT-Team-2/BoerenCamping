<?php

function isBookingDatumBeschikbaar($aankomst, $vertrek) {
    $servername = "localhost";
    $username = "max";
    $password = "Max=12345";
    $dbname = "camping_database";

    try {
    // Connectie creëren
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vraag de database voor overlappende resultaten
        $query = "SELECT COUNT(*) as count 
                  FROM reservation_data
                  WHERE (:aankomst BETWEEN Aankomst AND Vertrek
                       OR :vertrek BETWEEN Aankomst AND Vertrek
                       OR Aankomst BETWEEN :aankomst AND :vertrek)";

        // Prepareer de query
        $stmt = $conn->prepare($query);

        // Bind parameters
        $stmt->bindParam(':aankomst', $aankomst, PDO::PARAM_STR);
        $stmt->bindParam(':vertrek', $vertrek, PDO::PARAM_STR);

        // Voer het statement uit
        $stmt->execute();

        // Fetch het resultaat
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Sluit de database connectie
        $conn = null;

        // Return true als er geen overlappende resultaten zijn, anders False
        var_dump($result['count'] == 0);
        return $result['count'] == 0;

    } catch (PDOException $e) {
        // Behandel database connectie errors
        die("Connectie mislukt: " . $e->getMessage());
    }
}
?>

<?php

function isBookingDatumBeschikbaar($campeerPlekId, $startDatum, $eindDatum) {
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
                  FROM Reserveringen 
                  WHERE CampeerPlekId = :campeerPlekId 
                  AND (:startDatum BETWEEN StartDatum AND EindDatum
                       OR :eindDatum BETWEEN StartDatum AND EindDatum
                       OR StartDatum BETWEEN :startDatum AND :eindDatum)";

        // Prepareer de query
        $stmt = $conn->prepare($query);

        // Bind parameters
        $stmt->bindParam(':campeerPlekId', $campeerPlekId, PDO::PARAM_INT);
        $stmt->bindParam(':startDatum', $startDatum, PDO::PARAM_STR);
        $stmt->bindParam(':eindDatum', $eindDatum, PDO::PARAM_STR);

        // Voer het statement uit
        $stmt->execute();

        // Fetch het resultaat
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Sluit de database connectie
        $conn = null;

        // Return true als er geen overlappende resultaten zijn, anders False
        return $result['count'] == 0;
    } catch (PDOException $e) {
        // Behandel database connectie errors
        die("Connectie mislukt: " . $e->getMessage());
    }
}
?>

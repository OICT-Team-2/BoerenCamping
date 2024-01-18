<?php
  $servername = "localhost";
  $username = "root";
  $password = "Snerro24!";
  $dbname = "camping_database";

  try {
  // Connectie creëren
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
  } catch(PDOException $e) {
    die("Connectie mislukt: " . $e->getMessage());
  }
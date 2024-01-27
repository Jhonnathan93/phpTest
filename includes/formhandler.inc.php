<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO users (name, lastname) VALUES (:name, :lastname);";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":lastname", $lastname);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

        die();
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
} else { 
    header("Location: ../index.php");
}
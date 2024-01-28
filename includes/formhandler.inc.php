<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];

    try {
        // Include the database connection file
        require_once "dbh.inc.php";

        $query = "INSERT INTO users (name, lastname) VALUES (:name, :lastname);";

        // Prepared statements are a way to execute SQL queries with placeholders for parameters. 
        // This helps prevent SQL injection attacks.
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":lastname", $lastname);

        $stmt->execute();

        // Close the database connection and the prepared statement
        $pdo = null;
        $stmt = null;
        
        header("Location: ../index.php");

        // Terminate the script to prevent further execution
        die();
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
} else { 
    header("Location: ../index.php");
}
<?php

// Database configuration
// DSN stands for Data Source Name: provides the details necessary for establishing a connection to a data source.
$dsn = "mysql:host=localhost;dbname=php_test";
$dbusername = "root";
$dbpassword = "";

try{
    // Create a new PDO (PHP data object) instance for database connection
    // It is a PHP extension that provides a uniform method of access to multiple databases.
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    // Set PDO attributes to handle errors using exceptions
    // PDO::ATTR_ERRMODE is an attribute of the PHP Data Objects (PDO) extension that determines how PDO should handle errors.
    // PDO::ERRMODE_EXCEPTION: This mode causes PDO to throw exceptions when errors occur.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    echo "Conection failed: " . $e->getMessage();
}
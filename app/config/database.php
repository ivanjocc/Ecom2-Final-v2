<?php

function getDatabaseConnection() {
    $servername = "localhost";
    $username = "root";
    $pwd = "";
    $dbname = "PetShop";

    try {
        $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        
        $conn = new PDO($dsn, $username, $pwd, $options);
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }

    return $conn;
}

?>

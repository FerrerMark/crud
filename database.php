<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    try{
        $pdo = new PDO("mysql:host=$server;dbname=$dbname",$username,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>
<?php
$host = 'localhost';
$dbname = 'blogdb';
$username = 'root';
$password = '';

$dsn = "mysql:host=$host;dbname=$dbname;cherset=utf8";
 try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo"connexion réussie";
 } catch(PDOException $e) {
    echo "Erreur:". $e->getMessage();
        exit; 
 }
 
?>
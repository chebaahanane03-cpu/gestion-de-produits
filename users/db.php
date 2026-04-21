<?php
$host = "localhost";
$dbname = "usersdb";
$user = "root";
$password = "";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8;";

try{
    $pdo = new PDO($dsn,$user,$password);
  //  echo"connexion réussie <br>";
}catch(PDOException$e){
    echo "erreur";
}



<?php

$host = "127.0.0.1"; // adresse du serveur MySQL
$dbname = "time-tracking"; // nom de la base
$user = "root"; // utilisateur MySQL
$pass = "1234"; // mot de passe MySQL
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // exceptions en cas d'erreur
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // résultats en tableaux associatifs
    PDO::ATTR_EMULATE_PREPARES => false, // vraies requêtes préparées
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    return $pdo;
} catch (PDOException $e) {
    $pdo = null;
}

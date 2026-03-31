<?php 

$servername = 'localhost';
$username = 'root';
$password = 'root';
$port = '3307';
$dbname = "register";

// 1. Connexion SANS base
$conn = mysqli_connect($servername, $username, $password, null, $port);

if (!$conn) {
    die('Erreur de connexion : ' . mysqli_connect_error());
}

// 2. Création de la base si elle n'existe pas
$sql_db = "CREATE DATABASE IF NOT EXISTS $dbname";
if (mysqli_query($conn, $sql_db)) {
    echo "Base de données prête !<br>";
} else {
    die("Erreur création base : " . mysqli_error($conn));
}

// 3. Reconnexion AVEC la base
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

if (!$conn) {
    die('Erreur de connexion à la base : ' . mysqli_connect_error());
}

echo "Connexion réussie<br>";

// 4. Création de la table
$sql = "CREATE TABLE IF NOT EXISTS users(
    Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Identifiant VARCHAR(30) NOT NULL,
    Motdepasse VARCHAR(30) NOT NULL,
    Mail VARCHAR(50) NOT NULL,
    Sta_tus VARCHAR(50) NOT NULL,
    UNIQUE(Mail)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table bien créée !";
} else {
    echo "Erreur création table : " . mysqli_error($conn);
}

mysqli_close($conn);

?>
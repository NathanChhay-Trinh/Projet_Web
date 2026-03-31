<?php 

$servername = 'localhost';
$username = 'root';
$password = 'root';
$port = '3307';
$dbname = "register";

$conn = mysqli_connect($servername, $username, $password, null, $port);

if (!$conn) {
    die('Erreur de connexion : ' . mysqli_connect_error());
}

$sql_db = "CREATE DATABASE IF NOT EXISTS $dbname";
if (mysqli_query($conn, $sql_db)) {
    echo "Base de données prête !<br>";
} else {
    die("Erreur création base : " . mysqli_error($conn));
}

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

if (!$conn) {
    die('Erreur de connexion à la base : ' . mysqli_connect_error());
}

echo "Connexion réussie<br>";

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
$sql = "CREATE TABLE IF NOT EXISTS agenda (
    Id INT NOT NULL AUTO_INCREMENT,
    IdProf INT NOT NULL,
    Identifiant VARCHAR(50) NOT NULL,
    Mail VARCHAR(50) NOT NULL,
    Date_Session VARCHAR(50) NOT NULL,
    PRIMARY KEY (Id)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table bien créée !";
} else {
    echo "Erreur création table : " . mysqli_error($conn);
}

mysqli_close($conn);

?>
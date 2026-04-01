<?php
session_start();

$servername = 'localhost';
$username = 'root';
$password_db = 'root';
$port = '3307';
$dbname = "register";

// Connexion
$conn = mysqli_connect($servername, $username, $password_db, $dbname, $port);

if (!isset($_SESSION['pseudo']) || !isset($_SESSION['Email']) || !isset($_SESSION['id'])) {
    header('Location: login.php');
    exit();
}

if (!$conn) {
    die('Erreur : ' . mysqli_connect_error());
}

$pseudo = $_SESSION['pseudo'];
$email = $_SESSION['Email'];
$id = $_SESSION['id'];

// Récupération GET sécurisée
$id_Creneau = mysqli_real_escape_string($conn, $_GET['Id']);
$date_session = mysqli_real_escape_string($conn, $_GET['Date_Session']);
$profId = mysqli_real_escape_string($conn, $_GET['prof']);

// Requête SQL
$sql2 = "INSERT INTO agenda (Id, Id_Creneau, IdProf, Pseudo, Mail, Date_Session)
VALUES ('$id', '$id_Creneau', '$profId', '$pseudo', '$email', '$date_session' )";

if (mysqli_query($conn, $sql2)) {
    echo "Session ajoutée à l'agenda !";
} else {
    echo "Erreur SQL : " . mysqli_error($conn);
}

mysqli_close($conn);
?>


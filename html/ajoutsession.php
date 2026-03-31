<?php
session_start();

$servername = 'localhost';
$username = 'root';
$password_db = 'root';
$port = '3307';
$dbname = "register";

// Connexion
$conn = mysqli_connect($servername, $username, $password_db, $dbname, $port);
if (!isset($_SESSION['pseudo']) || !isset($_SESSION['Email'])) {
    header('Location: login.php');
    exit();
}
if(!$conn){
    die('Erreur : ' . mysqli_connect_error());
}

$pseudo = $_SESSION['pseudo'];
$email = $_SESSION['Email'];

// Récupération des données GET
$id = $_GET['Id'];
$date_session = $_GET['Date_Session'];
$profId = $_GET['prof'];

// Requête SQL pour insérer dans l'agenda
$sql2 = "INSERT INTO agenda (Id, IdProf, Identifiant, Mail, Date_Session)
VALUES ('$id', '$profId', '$pseudo', '$email', '$date_session')";

if (mysqli_query($conn, $sql2)) {
    echo "Session ajoutée à l'agenda !";
} else {
    echo "Erreur SQL : " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<?php include('creation_bdd.php');?>
<?php

function enregistrerCompte() {

    if (trim($_POST['identifiant']) !== '' &&
        trim($_POST['password']) !== '' &&
        trim($_POST['email']) !== '' &&
        trim($_POST['status']) !== '') {

        $servername = 'localhost';
        $username = 'root';
        $password = 'root';
        $port = '3307';
        $dbname = 'register';

        // Connexion
        $conn = mysqli_connect($servername, $username, $password, $dbname, $port);

        if (!$conn) {
            die('Erreur de connexion : ' . mysqli_connect_error());
        }

        // Sécurisation
        $identifiant = mysqli_real_escape_string($conn, $_POST['identifiant']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $mail = mysqli_real_escape_string($conn, $_POST['email']);
        $status = mysqli_real_escape_string($conn, $_POST['status']);

        // Requête SQL
        $sql = "INSERT INTO users (Identifiant, Motdepasse, Mail, Sta_tus)
                VALUES ('$identifiant', '$password', '$mail', '$status')";

        // Exécution + message
        if (mysqli_query($conn, $sql)) {
            echo "Entrée ajoutée dans la table";
        } else {
            echo "Erreur SQL : " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
}

enregistrerCompte();

?>
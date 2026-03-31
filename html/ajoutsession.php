<?php $servername = 'localhost';
    $username = 'root';
    $password_db = 'root';
    $port = '3307';
    $dbname = "register";

    // Connexion
    $conn = mysqli_connect($servername, $username, $password_db, $dbname, $port);

    if(!$conn){
        die('Erreur : ' . mysqli_connect_error());
    }

    $pseudo = $_SESSION['pseudo'];
    $email = $_SESSION['Email'];

    $sql = "SELECT * FROM users WHERE Mail = '$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    $sql2 = "INSERT INTO agenda (Id, Identifiant, Mail, Date_Session)
                VALUES ('$_GET['Id']', '$pseudo', '$email', '$_GET['Date_Session']')";

    mysqli_close($conn);
    ?>
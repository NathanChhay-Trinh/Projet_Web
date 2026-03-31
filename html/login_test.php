<?php 
if (isset($_POST['identifiant'], $_POST['password'], $_POST['email'])) {

    $servername = 'localhost';
    $username = 'root';
    $password_db = 'root';
    $port = '3307';
    $dbname = "register";

    // Connexion
    $conn = mysqli_connect($servername, $username, $password_db, $dbname, $port);

    if(!$conn){
        die('Erreur : ' . mysqli_connect_error());
    }

    // Récupération des données
    $identifiant = mysqli_real_escape_string($conn, $_POST['identifiant']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Requête SQL
    $sql = "SELECT * FROM users WHERE Mail = '$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {

        $user = mysqli_fetch_assoc($result);

        // Vérification du mot de passe
        if ($user['Motdepasse'] === $password) {
            echo "Vous êtes connecté !";
            mysqli_close($conn);
            session_start();
            $_SESSION['pseudo'] = $user['Identifiant'];
            $_SESSION['id'] = $user['Id'];
            $_SESSION['Email'] = $user['Mail'];
            echo 'Bienvenue ' . $_SESSION['pseudo'] . $_SESSION['id'] . $_SESSION['Email'];
        } else {
            echo "Mot de passe incorrect.";
        }

    } else {
        echo "Aucun compte trouvé avec cet email.";
    }
}
?>
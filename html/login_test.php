<?php 
                if (isset($_POST['identifiant'], $_POST['password'])) {
                   $servername = 'localhost';
                    $username = 'root';
                    $password = 'root';
                    $port = '3307';
                    $dbname = "register";
                    //On établit la connexion
                    $conn = mysqli_connect($servername, $username, $password, $dbname, $port);
                    //On vérifie la connexion
                    if(!$conn){
                    die('Erreur : ' .mysqli_connect_error());
                    }
                    $identifiant = $_POST['identifiant'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) === 1) {
                    $user = mysqli_fetch_assoc($result);

                    // Vérification du mot de passe (version simple)
                    if ($user['password'] === $password && $user['email'] === $email) {
                    echo "Vous êtes connecté !";
                    } else {
                    echo "Mot de passe incorrect.";
                    }
                    } else {
                    echo "Aucun compte trouvé avec cet email.";
                    }

                }
            ?>
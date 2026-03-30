<?php function enregistrerCompte() {
                     if(trim($_POST['identifiant']) !== '' && trim($_POST['password']) !== '' && trim( $_POST['email']) !== '') {
                    $servername = 'localhost';
                    $username = 'root';
                    $password = 'root';
                    $port = '3307';
                    $dbname = 'register';
                    //On établit la connexion
                    $conn = mysqli_connect($servername, $username, $password, $dbname, $port);

                    $identifiant = mysqli_real_escape_string($conn, $_POST['identifiant']);
                    $password = mysqli_real_escape_string($conn, $_POST['password']);
                    $mail = mysqli_real_escape_string($conn, $_POST['email']);

                    $sql = "INSERT INTO Professeur (Identifiant, Motdepasse, Mail)
                    VALUES ('$identifiant', '$password', '$mail')";
                    echo 'Entrée ajoutée dans la table';
                    mysqli_query($conn, $sql);
                    Mysqli_close($conn);
                    }
                    }

                    enregistrerCompte()
                    ?>
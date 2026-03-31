<?php 
                    $servername = 'localhost';
                    $username = 'root';
                    $password = 'root';
                    $port = '3307';
                    $dbname = "register";
                    //On établit la connexion
                    $conn = mysqli_connect($servername, $username, $password, $null, $port);
                    //On vérifie la connexion
                    if(!$conn){
                    die('Erreur : ' .mysqli_connect_error());
                    }

                    $sql_db = "CREATE DATABASE IF NOT EXISTS $dbname";
                    if ($conn->query($sql_db) === TRUE) {
                        echo "Base de données prête !<br>";
                    }
                    
                    echo 'Connexion réussie';
                    $sql = "CREATE TABLE IF NOT EXISTS all_accounts(
                    Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    Identifiant VARCHAR(30) NOT NULL,
                    Motdepasse VARCHAR(30) NOT NULL,
                    Mail VARCHAR(50) NOT NULL,
                    Sta_tus VARCHAR(50) NOT NULL,
                    DateInscription TIMESTAMP,
                    UNIQUE(Mail))"; 
                    echo 'Table bien créée !';
                    mysqli_query($conn, $sql);
                    Mysqli_close($conn); 
                    ?>
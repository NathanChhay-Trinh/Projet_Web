<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main class="register-container">
        <fieldset>
        <legend>Créer votre compte</legend>

        <form action="register_process.php" method="POST" class="login-form">
            <div class="register-group">
                <label for="identifiant">Identifiant</label>
                <input type="text" id="identifiant" name="identifiant" required>
            </div>

            <div class="register-group">
                <label for="email">Adresse email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="register-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit">Créer votre compte</button>

        </form>
</fieldset>


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
            
            ?>
    
    </main>

</body>
</html>
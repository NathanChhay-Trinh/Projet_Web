<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main class="login-container">
        <fieldset>
        <legend>Connexion</legend>

        <form action="login.php" method="POST" class="login-form">

            <div class="input-group">
                <label for="email">Adresse email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit">Se connecter</button>

            <p class="register-link">
                Pas encore de compte ? <a href="register.php">Créer un compte</a>
            </p>

        </form>
</fieldset>
    
    </main>

</body>
</html>
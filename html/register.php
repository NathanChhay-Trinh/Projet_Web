<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/Interface_de_base.css">
    <title>Création de compte</title>

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

            <div>
                <label for="status">Statut :</label>
                <select name="status" id="status">
                    <option value="">--Veuillez choisir une option--</option>
                    <option value="marie">étudiant</option>
                    <option value="celibataire">professeur</option>
                </select>
            </div>

            <button type="submit">Créer votre compte</button>

        </form>
</fieldset>
    </main>

</body>
</html>
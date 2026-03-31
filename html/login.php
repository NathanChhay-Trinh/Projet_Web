<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/Interface_de_base.css">
    <title>Connexion</title>

    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <?php include("menu.php"); ?>
    <main class="login-container">
        <fieldset>
        <h2>Connexion</h2>

        <form action="login_test.php" method="POST" class="login-form">

            <div class="input-group">
                <label for="identifiant">Identifiant</label>
                <input type="text" id="identifiant" name="identifiant" required>
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit">Se connecter</button>

        </form>
</fieldset>
    
    </main>
    <?php include("./Footer.php"); ?>

</body>
</html>
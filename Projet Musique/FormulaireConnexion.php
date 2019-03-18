<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" >

    <title>Connexion</title>
</head>
<body>
<form name="comment" method="post" action="ConTraitement.php" id="form">

    <fieldset>
        <legend>Connexion</legend>
        <p>
            <input type="text" name="log" id="log" placeholder="pseudo" required>
        </p>
        <p>
            <input type="password" name="pwd" id="pwd" placeholder="mot de passe" required>
        </p>
        <p>
            <input type="submit" name="submit" id="submit">
        </p>
    </fieldset>
</form>

</body>
</html>
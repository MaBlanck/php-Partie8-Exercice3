<?php
if (isset($_POST['login']) && isset($_POST['password'])) {
    setcookie('login', $_POST['login'], time() + 24 * 3600);
    setcookie('password', $_POST['password'], time() + 24 * 3600);
    header('location: show.php');
}
if (!isset($_COOKIE['login']) && !isset($_COOKIE['password'])) :
    header('location: index.php');
endif;
?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 5 Partie 8</title>
</head>

<body>
    <h1>Exercice 5 Partie 8</h1>
    <nav>
        <ul>
            <li><a href="index.php">Index</a></li>
            <li><a href="show.php">Show Php</a></li>
            <li><a href="edit.php">Edit</a></li>
        </ul>
    </nav>
    <form method="post">
        <fieldset>
            <legend>Sécurité</legend>
            <label for="login">Login</label>
            <input type="text" name="login" value="<?= htmlentities($_COOKIE['login'])  ?>">
            <label for="password">Password</label>
            <input type="password" name="password" value="<?=htmlentities($_COOKIE['password']) ?>">
            <input type="submit" value="Modifier">
        </fieldset>
    </form>
</body>

</html>
<?php 
if (!isset($_COOKIE['login']) && !isset($_COOKIE['password'])):
    header('location: index.php');
endif;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 4 Partie 8</title>
</head>

<body>

    <h1>Exercice 4 Partie 8</h1>
    <nav>
        <ul>
            <li><a href="index.php">Index</a></li>
            <li><a href="show.php">Show Php</a></li>
            <li><a href="edit.php">Edit</a></li>
        </ul>
    </nav>
    <?php if (isset($_COOKIE['login']) && isset($_COOKIE['password'])): ?>
        <p>Ton identifiant est <?= htmlentities($_COOKIE['login']); ?></p>
        <p>Ton mot de passe est <?= htmlentities($_COOKIE['password']); ?></p>
    <?php endif;?>
    <a href="edit.php"><button>Modifier</button></a>

</body>

</html>
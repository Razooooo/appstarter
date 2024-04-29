<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title>bibliotheque des noirs</title>
</head>
<header>
    <h1>Best BOOK</h1>
    <?php if (isset($loggedIn) && $loggedIn == true) : ?>
        <span>Bonjour, <?= esc($name) ?></span>
    <?php endif ?>
    <nav>
        <ul>
            <li><a href="#">Menu</a></li>
        </ul>
    </nav>
<body>


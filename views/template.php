<?php
session_start();
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Bienvenue sur votre site dédié aux animaux">
    <!-- The title of the page -->
    <title>SPA - amicalement vôtre</title>
    <!-- My link to use fontawesome website, used for paw, dog and cat icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
          integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">

    <!-- Link to connect to google font database (I guess), require once for all google-fonts used -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- Font used only for h1 (yet at least) -->
    <link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
    <!-- Font from google font used for paragraphe, 'p' tags -->
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <!-- Font used in navbar -->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <!-- Font used as pet header in pets iteration -->
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
    <!-- Font for buttons -->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Rajdhani:wght@600&display=swap" rel="stylesheet">

    <!-- 'Normalize' file is here to get a similar graphic rendering on 'all' browsers-->
    <link href="css/normalize.css" rel="stylesheet">
    <!-- Like require_once in others files, we need to catch 'styles.css' file from 'index.php'
         and not from this 'template.php' curent location because of routage -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- Next lines are only for the icon of the website, on the left of the title -->
    <link rel="apple-touch-icon" sizes="180x180" href="public/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="public/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/icon/favicon-16x16.png">
    <link rel="manifest" href="public/icon/site.webmanifest">
    <link rel="mask-icon" href="public/icon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="public/icon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="public/icon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <header>
        <h1>La Société Protectrice des Animaux</h1>
        <img id="logo" src="public/icon/originalIcon/websiteIconLittle.png" alt="Icon du site SPA">
        <nav id="Menu">
            <ul>
                <li><a href="Accueil" title="Désirez-vous un maté ?">Accueil</a></li>
                <li><a href="Présentation">Présentation</a></li>
                <li><a href="Tous_nos_animaux">Nos animaux</a>
                    <ul>
                        <li><a href="Chiens">Chiens</a></li>
                        <li><a href="Chats">Chats</a></li>
                        <li><a href="Octodons">Octodons</a></li>
                    </ul>
                </li>
                <li><a href="Contact">Contact</a></li>
                <li><a href="Connexion">Se connecter</a></li>
            </ul>
        </nav>
        <hr class="partSeparator">
    </header>

    <main>
        <h2 id="subTitle"><?= $_SESSION['pageName'] ?></h2>

        <?= $content ?>
    </main>

    <footer>
        <hr class="partSeparator">
        <p id="pFooter">
            Toutes les équipes de la Société protectrice des animaux vous remercient
        </p>
        <p id="space">- - -</p>
        <p>
            <em>○○○ Nous représentons ceux qui ne peuvent se représenter ○○○</em>
        </p>
    </footer>
</body>
</html>
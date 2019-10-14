<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/all.css" rel="stylesheet"> <!--load all styles -->
    
    
    <title>Bacon Project</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="main-nav">
    <a class="navbar-brand" href="index.php">Bacon Project</a>
    <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbarColor02"
            aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="pages/play.php">Jouer<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false">Le jeu</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="pages/characters.php">Personnages</a>
                    <a class="dropdown-item" href="pages/rules.php">Règles</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="pages/contribute.php">Contribuer</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/contact.php">Nous contacter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://baconproject.mystrikingly.com/">Site Officiel</a>
            </li>
        </ul>
        <div id="nav-account-management">
            <a href="pages/account/login.php">
                <button type="button" class="btn btn-primary">Se connecter</button>
            </a>
            <a href="pages/account/sign-in.php" id="account-creation">Créer un compte</a>
        </div>
    </div>
</nav>
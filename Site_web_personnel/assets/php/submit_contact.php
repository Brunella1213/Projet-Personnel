<?php

if (
    (!isset($_GET['email']) || preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$_GET['email']))
    || (!isset($_GET['message']) || empty($_GET['message']))
    )
{
	echo('Attention !! Il faut un email et un message valide pour soumettre le formulaire.');
    return;
}

?>
<!DOCTYPE php>
<php lang="FR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <meta name="viewport" content="user-scalable=yes">
    <title>Contact</title>
    <link rel="stylesheet" href="contact.css">
    <style></style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
          window.onscroll = function() {
            document.getElementById("button-return-main").className = (window.pageYOffset > 100) ? "button-return-visible" : "button-return-invisible";
          };
        });
    </script>

</head>


<body>
<div>
    <a id="button-return-main" class="button-return-invisible" href="#"></a>
</div>


<nav>
    <ul id="menu">
        <li class="menu-main"><a href="index.php">Accueil</a>
            <ul class="menu-second">
                <li><a href="#"></a></li>
                <li><a href="#">lien sous menu 1</a></li>
                <li><a href="#">lien sous menu 1</a></li>
            </ul>
        </li>
        <li class="menu-main"><a href="project.php">Mes Projets</a>
            <ul class="menu-second">
                <li><a href="#">Lien sous menu 4</a></li>
                <li><a href="#">Lien sous menu 4</a></li>
                <li><a href="#">Lien sous menu 4</a></li>
            </ul>
        </li>
        <li class="menu-main"><a class="menu-active" href="contact.php">Mes coordonnées</a>
            <ul class="menu-second">
                <li><a href="#">Numéro de téléphone et E-mail</a></li>
                <li><a href="#">Lien sous menu 4</a></li>
                <li><a href="#">Lien sous menu 4</a></li>
            </ul>
        </li>
    </ul>
</nav>
<h1>Message bien reçu !</h1>
        
<div class="card">
    
    <div class="card-body">
        <h5 class="card-title">Rappel de vos informations</h5>
        <p class="card-text"><b>Email</b> : <?php echo $_GET['email']; ?></p>
        <p class="card-text"><b>Message</b> : <?php echo $_GET['message']; ?></p>
    </div>
</div>
<?php

// require_once("connexionBd.php");
// require_once("login.php");

// if (!isset($_COOKIE["registered"])) {
//     header("Location: login.php");
//     die();
// }

// $error = '';

// if (headers_sent()) {
//     echo '<script type="text/javascript">
//     window.location.href="?routing=home";
//     </script>
//     <noscript>
//     <meta http-equiv="refresh" content="0;url=?routing=home" />
//     </noscript>';
// } else {
//     echo 'Une erreur est survenue lors de votre enregistrement';

//     header("location: ?routing=home");
// }

// Vérifier si l'utilisateur est connecté
// $_SESSION['name'] = $user['name'];
if (!isset($_SESSION['name'])) {
    // Rediriger vers la page de connexion ou autre page appropriée
    header('Location: ?routing=login');
    exit();
}
?>

<section class="hero is-fullheight-with-navbar is-flex is-align-items-center is-justify-content-center" style="background-image: url('assets/PrésentationCyber-harcèlement-2.png');">
    <div class="hero-body">
        <div class="columns-container is-centered">
            <div class="column is-centered">
                <div class="container has-text-centered" id="container">
                    <h1 class="title is-1 has-text-centered is-info" id="titre">Le quiz du cyber-harcèlement </h1>
                    <p class="subtitle is-5" id="text">Ce petit quiz va vous permettre d'évaluer si vous avez retenu les points clés sur le cyber-harcèlement.</p>
                </div>
            </div>
            <!--Bouton pour changer de page, les ancres sont dans le head-->
            <div class="start" style="display: flex; align-items: center; justify-content: center; margin-top: 10px;">
                <nav class="pagination is-rounded is-centered" role="navigation" aria-label="pagination">
                    <a class="pagination-next" href="?routing=quizOne">Start</a>
                    <!--<a href="?routing=quizOne" class="navbar-item" id="menu">QuizOne</a>-->
                </nav>
            </div>
        </div>
    </div>
    <?php
    // creaion d'une variable routing vide, afin que sa ne plante pas par la suite
    $routinge = '';
    // pour verifier routing est bien rempli, on s'assure que dans le get routing il y est bien une valeur sinon cela sert a rien
    if (isset($_GET['routing'])) {
        $routinge = $_GET['routing'];
    }
    // Cela permet de charger les composant présent dans le dossier component en fonction de la valeur de routing
    switch ($routinge) {
        case 'contact':
            require_once('component/quizOne.php');
            break;
        case 'register':
            require_once('php/register.php');
            break;
        case 'login':
            require_once('php/login.php');
            break;
    }
    ?>
</section>
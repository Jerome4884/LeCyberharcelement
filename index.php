<?=
session_start(); // Must be at the beginning, otherwise the session will not work
ob_start(); // Permet d'enregistré les données dans une mémoire tampon / Stores data in a buffer memory.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- lien bulma -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <!--Lien style css-->
    <?php echo '<link rel="stylesheet" type="text/css" href="style.css">' ?>
    <!--Lien script js-->
    <!-- <?php // echo "<script src='index.js'></script>" ?>
    <script>
        let js = "<//?php echo $js; ?>";
        console.log(js);
    </script> -->
    <!--Lien googleFont-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Paytone One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin Sans">
    <!--Lien icon fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Accueil</title>
</head>
<body>
<header>
        <!--Navigation-->
            <section class="section" id="navBar"><!--style="background-color: #d4cac170;"-->
                <nav class="navbar is-fixed-top" >
                    <div class="columns is-mobile">
                        <!--Logo-->
                        <div class="column left is-mobile" id="logo">
                            <figure class="image is-128x128">
                            <a href="https://www.aegis-civis.com"><img src="assets/LOGO AEGIS.png" alt="logo"></a>
                            </figure>
                        </div>
                        <a role="button" class="navbar-burger" id="burger" aria-label="menu" aria-expanded="false">
                            <!--pour le nbre de barre, généralement 3-->
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                        </a> 

                        <!--Elements du menu-->
                        <div class="column center column is-three-quarters-mobile is-two-thirds-tablet is-half-desktop is-one-third-widescreen is-one-quarter-fullhd">
                            <!-- <div class="navbar-menu "> -->
                                <!-- <div class="navbar-start "> -->
                                    <div class="navbar-item">
                                        <div class="button is-small is-responsive is-rounded">
                                            <button class="button is-rounded" style="border: none;"><a href="."  style="text-decoration: none; color: #29478B;">Accueil</a></button>
                                            <!--On passe une variable de type get dans la requette http + nom de la valeur ou on veut aller-->
                                            <button class="button" style="border: none;"><a href="?routing=sommairePresentation"  style="text-decoration: none; color: #29478B;">Présentation</a></button>
                                            <button class="button" style="border: none;"><a href="?routing=quizPresentation"  style="text-decoration: none; color: #29478B;">Quiz</a></button>
                                            <button class="button" style="border: none;"><a href="?routing=aPropos"  style="text-decoration: none; color: #29478B;">A propos</a></button>
                                            <button class="button" style="border: none;"><a href="?routing=contact"  style="text-decoration: none; color: #29478B;">Contact</a></button>
                                        </div>
                                    </div>
                                <!-- </div> -->
                                <!-- <div class="navbar is-mobile"> -->
                                <div class="colums right is-mobile" id="social">
                                    <div class="navbar-brand" id="social">
                                        <p><small>suivez-nous sur les réseaux</small></p>
                                        <a href="https://www.linkedin.com/company/aegis-civis/" class="navbar-item"><img src="assets/linkedin.png" alt="linkedin"></a>
                                    </div>
                                <!-- </div> -->
                                </div>
                            <!-- </div> -->
                        </div>
                    <div class="column right is-mobile">
                        <nav class="breadcrumb ml-5" aria-label="breadcrumbs" style="display: flex; flex-direction: row; align-items: right;">
                            <button class="button is-rounded is-small"><a href="?routing=login" style="text-decoration: none; color: #29478B;">Se connecter</a></button>
                            <button class="button is-rounded is-small"><a href="?routing=disconnect" style="text-decoration: none; color: #29478B;">Se deconnecter</a></button>
                        </nav>
                    </div>
                </nav>
            </section>
                <!-- <div class="navbar-end">
                    <div class="block">
                        <nav class="breadcrumb mt-6 pr-3" aria-label="breadcrumbs" style="display: flex; flex-direction: row; align-items: right;">
                            <button class="button is-rounded"><a href="?routing=login" style="text-decoration: none; color: #29478B;">Se connecter</a></button>
                            <button class="button is-rounded"><a href="?routing=disconnect" style="text-decoration: none; color: #29478B;">Se deconnecter</a></button>
                        </nav>
                    </div>
                </div> -->

    </header>
    <!--partie central-->

    <div class="columns-container is-gapless">
        <div class="columns is-centered is-multiline is-full is-gapless">
            <div class="column is-full is-offset-x">
                <!-- Creation d'une partie routing, afin de simplifier le code -->
                <?php
                // creaion d'une variable routing vide, afin que sa ne plante pas par la suite
                $routing = '';
                // pour verifier routing est bien rempli, on s'assure que dans le get routing il y est bien une valeur sinon cela sert a rien
                if (isset($_GET['routing'])) {
                    $routing = $_GET['routing'];
                }
                // Cela permet de charger les composant présent dans le dossier component en fonction de la valeur de routing
                switch ($routing) {
                    case 'contact':
                        require_once('component/contact.php');
                        break;
                    case 'aPropos':
                        require_once('component/aPropos.php');
                        break;
                    case 'sommairePresentation':
                        require_once('component/sommairePresentation.php');
                        break;
                    case 'Presentation':
                        require_once('component/Presentation.php');
                        break;
                    case 'quizPresentation':
                        require_once('component/quizPresentation.php');
                        break;
                    // case 'finishQuiz':
                    //     if (isset($_GET['send'])) {
                    //     require_once('component/quiz/quizOne.php');
                    //     break;
                    //     }
                    //     require_once('component/quiz/finishQuiz.php');
                    //     break;
                    case 'quizOne':
                        if (isset($_GET['send'])) {
                            require_once('component/quiz/quizTraitment.php');
                            break;
                        }
                        require_once('component/quiz/quizOne.php');
                        break;
                    case 'quizTraitment':
                        require_once('component/quiz/quizTraitment.php');
                        break;
                    case 'register':
                        require_once('php/register.php');
                        break;
                    case 'login':
                        require_once('php/login.php');
                        break;
                    case 'disconnect':
                        require_once('php/disconnect.php');
                        break;
                        // On définit la page par défaut, ici home, quoi que l'utilisateur mzet dans l'url, il sera redirigé sur home
                    default:
                        require_once('component/home.php');
                        break;
                }
                ?>
            </div>
        </div>
    </div>

    <!--footer-->
    <footer class="footer is-flex is-align-items-center is-justify-content-center" id="foter"><!-- style="background-color: #B2BCCF; height: 20px;"-->
        <div style="margin-top: 0; padding-top:1px; display: flex; flex-direction: column; justify-content:center; align-items: center;">
            <figure class="image">
                <img id="logoFooter" src="assets/LOGO AEGIS.png" alt="Logo AEGIS CIVIS" style="width: 150px;">
            </figure>
            <h6 class="subtitle has-text-centered">© 2023 </h6>
            <h6 class="subtitle has-text-centered" id="contentFoot">
                <strong>Le cyber-harcelement </strong> par Aegis-Civis. <br>Tous droit réservé
            </h6>
            <div class="bulle">
                <p class="subtitle has-text-centered is-5 info" id="text">
                    Passé votre souris dessus pour voir ce qui s'y cache
                </p>
            </div>
        </div>
    </footer>

</body>

<script>
    //burger menu
    // Script for burger menu
    document.addEventListener('DOMContentLoaded', () => {

// Get all "navbar-burger" elements
const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Add a click event on each of them
$navbarBurgers.forEach( el => {
  el.addEventListener('click', () => {

    // Get the target from the "data-target" attribute
    const target = el.dataset.target;
    const $target = document.getElementById(target);

    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
    el.classList.toggle('is-active');
    $target.classList.toggle('is-active');

  });
});

});
    // Footer
    let info = document.getElementsByClassName("info")[0];
    let bulle = document.getElementsByClassName("bulle")[0];
    info.addEventListener("mouseenter", () => {
        info.innerHTML = "Ce site a été réalisé au cours d'un stage chez Aegis-Civis groupe par Jérôme, un stagiaire en formation de développeur web et web mobile, donc débutant. Si le site présente des bugs, des imperfections ou autres problèmes, la faute incombe uniquement à Jérôme. Merci de votre compréhension.";
    });
    //     info.addEventListener("mouseleave", () => {
    //     bulle.innerHTML = "Passé votre souris dessus pour voir ce qui s'y cache";
    // });
</script>

</html>
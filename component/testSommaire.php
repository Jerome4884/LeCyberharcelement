
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RechercheExemple</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="index.js"></script>
    <!--Lien googleFont-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Paytone One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin Sans">
    <!--Lien icon fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>

    <!-- Navigation transparente 
    <div class="columns is-centered">
        <div class="column is-three-quarters">

                <nav class="navbar ">
                            <div class="navbar-brand">
                                <a class="navbar-item" href="#">
                                         <img src="projetWebCyberH/assets/LOGO AEGIS.png" alt="logo Aegis civis" class="image">
                                 </a>
                                <div class="navbar-burger burger"  id="btnNav"  data-target="menuContent">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                               </div>
                            </div>
                          
                            <div id="menuContent" class="navbar-menu">
                                <div class="navbar-start">
                                        <a href="." class="navbar-item" id="menu" style="text-decoration: none; color: #29478B;">Accueil</a>-->
                                        <!--On passe une variable de type get dans la requette http + nom de la valeur ou on veut aller
                                        <a href="?routing=sommairePresentation" class="navbar-item" id="menu" style="text-decoration: none; color: #29478B;">Présentation</a>
                                        <a href="?routing=quizPresentation" class="navbar-item" id="menu" style="text-decoration: none; color: #29478B;">quiz</a>
                                        <a href="?routing=aPropos" class="navbar-item" id="menu" style="text-decoration: none; color: #29478B;">A propos</a>
                                        <a href="?routing=contact" class="navbar-item" id="menu" style="text-decoration: none; color: #29478B;">Contact</a>
                                        <a href="?routing=testSommaire" class="navbar-item" id="menu" style="text-decoration: none; color: #29478B;">test</a>                              </div>

                           </div>
                </nav>
        </div>
</div>-->

<div class="container is-widescreen">
<!-- Titre et recerche -->
<div class="columns is-centered is-multiline">
    <div class="column is-three-quarters">
        <!-- Titre et barre de recherche -->
        <h2 class="title is-3 has-text-centered">Sommaire des points aborder</h2>
    </div>

    </div>
    <div class="column is-12">
        <p class="has-text-centered">Le cyberharcèlement.</p>
    </div>
</div>
        
<!-- Partie résultats de recherche -->
<br><br>
<div class="columns is-multiline is-centered is-mobile">
        <div class="column is-8-mobile is-4-tablet is-4-desktop">
            <img src="ressources/aptParis.jpg"  alt="">
            <p class="is-size-3 ">Lorem, ipsum.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="column is-8-mobile is-4-tablet is-4-desktop">
                <img src="ressources/aptParis.jpg" alt="">
                <p class="is-size-3 ">Lorem, ipsum.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="column is-8-mobile is-4-tablet is-4-desktop">
                <img src="ressources/aptParis.jpg" alt="">
                <p class="is-size-3 ">Lorem, ipsum.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="column is-8-mobile is-4-tablet is-4-desktop">
                <img src="ressources/aptParis.jpg" alt="">
                <p class="is-size-3 ">Lorem, ipsum.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="column is-8-mobile is-4-tablet is-4-desktop">
                <img src="ressources/aptParis.jpg" alt="">
                <p class="is-size-3 ">Lorem, ipsum.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="column is-8-mobile is-4-tablet is-4-desktop">
                <img src="ressources/aptParis.jpg" alt="">
                <p class="is-size-3 ">Lorem, ipsum.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="column is-8-mobile is-4-tablet is-4-desktop">
                <img src="ressources/aptParis.jpg" alt="">
                <p class="is-size-3 ">Lorem, ipsum.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="column is-8-mobile is-4-tablet is-4-desktop">
                <img src="ressources/aptParis.jpg" alt="">
                <p class="is-size-3 ">Lorem, ipsum.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="column is-8-mobile is-4-tablet is-4-desktop">
                <img src="ressources/aptParis.jpg" alt="">
                <p class="is-size-3 ">Le quiz.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
    </div>
</div>

<br><br><br>
<!-- Footer -->


<script>

var btn = document.getElementById('btnNav');
var content = document.getElementById('menuContent');
console.log(content);

btn.addEventListener('click', function(){
    content.classList.toggle('is-active');
})

</script>
</body>
</html>
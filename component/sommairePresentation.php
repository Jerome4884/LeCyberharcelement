 <?php
    // creaion d'une variable routing vide, afin que sa ne plante pas par la suite
    $r = '';
    // pour verifier routing est bien rempli, on s'assure que dans le get routing il y est bien une valeur sinon cela sert a rien
    if (isset($_GET['routing'])) {
        $r = $_GET['routing'];
    }
    // Cela permet de charger les composant présent dans le dossier component en fonction de la valeur de routing
    // switch ($r) {
    //     case 'Presentation':
    //         require_once('component/Presentation.php');
    //         break;
    // }
    ?>
 <?php
    // Create new routing for sum

    // $p = '';
    // if(isset($_GET['p'])){
    //     $p = $_GET['p'];
    // }
    // switch ($p) {
    //     case 'le-cyber-harcelement-c-est-quoi':
    //         require_once('');
    //             break;
    // }
    // 
    ?>
 <section id="containerFirst" class="hero is-fullwidth-with-navbar is-flex is-align-items-center is-justify-content-center imgFond"><!--style="background-image: url('/Applications/MAMP/htdocs/Projet-web-cyberharcelement/hero/assets/background2.jpg');  background-size: cover; height: 100%;"-->
     <div class="hero-body" id="containerSecond">
         <div class="section">
             <h1 id="text" class="title is-2 has-text-white-bis has-text-centered">
                 Sommaire
             </h1>
             <div class="content has-text-white-bis has-text-centered" id="sommaire">

                 <div id="boxSummary" class="box"><a href="#le-cyber-harcelement-c-est-quoi">Le cyberharcèlement, c'est quoi?</a></div>
                 <div id="boxSummary" class="box"><a href="#comment-le-deceler">Comment le déceler?</a></div>
                 <div id="boxSummary" class="box"><a href="#s-en-premunir">Que faire pour s'en prémunir?</a></div>
                 <div id="boxSummary" class="box"><a href="#consequences">Quelles sont les conséquences?</a></div>
                 <div id="boxSummary" class="box"><a href="#pas-devenir">Et pour ne pas le devenir</a></div>
                 <div id="boxSummary" class="box"><a href="#loi">Que dit la loi</a></div>
                 <div id="boxSummary" class="box"><a href="#parler">A qui en parler?</a></div>
                 <div id="boxSummary" class="box"><a href="Présentation.html#3018">Le 3018</a></div>

             </div>
         </div>
     </div>
 </section>
 <section>
     <div class="columns-container is-gapless" id="le-cyber-harcelement-c-est-quoi">
         <div class="columns is-centered is-multiline is-full is-gapless">
             <div class="column is-full is-offset-x">
                 <section class="hero is-fullheight-with-navbar" id="" style="background-color: #F3FAFD;">
                    <div class="hero-body" id="">
                        <figure class="image">
                            <img class="is-rounded" style="max-width: 300px;" src="./assets/composition-cyber-intimidation-isometrique-messages-emoticones-pour-ordinateur-portable-mains-humaines-pointant-vers-quelqu-fond-bleu-illustration-vectorielle-3d_1284-69106.jpg.avif" alt="mains-humaines-pointant-vers-une-personne-fond-bleu">
                        </figure>
                        <div class="container has-text-centered" id="container">
                             <div class="cloud" style="background-color: bisque; border-radius: 10% 20% 40% 50% / 50% 30% 30% 60%; padding: 10px; text-align: center;">
                                 <h1 class="title is-1 has-text-centered is-info" id="titre">Le cyber-harcèlement c'est quoi?</h1>
                             </div>
                             <p class="subtitle is-5" id="text">C'est une forme d'agression numérisée mais tout aussi réelle qui se caractérise par une action répétée visant à nuire à une personne ou à un groupe de personnes, via les réseaux sociaux, les applications de messagerie ou les jeux en ligne.</p>
                             <div id="player">
                                 <!-- Your content -->
                                 <iframe width="460" height="215" src="https://www.youtube.com/embed/zUW3JyLtYsQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                             </div>
                             <!--Insertion modal, et video youtube-->

                             <!-- <button class="js-modal-trigger" data-target="modal-js-example">
                                 <i class="fa-brands fa-youtube fa-bounce">Clique ici pour en voir plus</i>
                             </button>
                             <div id="modal-js-example" class="modal">
                                 <div class="modal-background"></div> -->

                             <!-- <div class="content"> -->
                             <!-- <div class="card"> -->
                             <!-- <p>C'est quoi le cyberharcèlement en video ?</p> -->
                             <!--div pour afficher la video youtube avec firefox, le js est dans la page player.js-->
                             <!-- </div> -->

                             <!-- <button class="modal-close is-large" aria-label="close"></button> -->
                        </div>
                        <figure class="image">
                            <img class="is-rounded" style="max-width: 300px;" src="./assets/concept-cyberintimidation_23-2148595215.jpg.avif" alt="mains-humaines-pointant-vers-une-personne-fond-bleu">
                        </figure>
                    </div>


             </div>
 </section>
 </div>
 </div>
 </div>
 <div class="columns-container is-gapless" id="comment-le-deceler">
     <div class="columns is-centered is-multiline is-gapless">
         <div class="column is-full is-offset-x">
             <section class="hero is-fullheight" id="bkgPres" style="background-color: #F3FAFD;">
                 <div class="hero-body">
                    <div class="container has-text-centered" id="container">
                         <h1 class="title is-1 has-text-centered" id="titre">Comment le déceler ?</h1>
                         <!--Icon font awesome-->
                         <div class="columns mx-5 ">
                             <i class="fa-solid fa-quote-left fa-2xl"></i>
                         </div>
                         <div class="card">
                             <div class="card-content">
                                 <p class="subtitle is-5" id="text">Il se matérialise sous différentes formes:
                                     Messages irrespectueux, violents.
                                     Incitation à faire des choses contre sa volonté, comme s'auto-mutiler.
                                     Diffusion d'image ou vidéo en ligne contre le consentement de la personne.
                                     Usurpation d'identité digitale
                                 </p>
                             </div>
                         </div>
                         <br>
                         <div class="card">
                             <div class="card-content">
                                 <p class="subtitle is-5" id="text">
                                     Ce sont généralement des actes répétés et intentionnels, mais il peut parfois être difficile de faire la différence avec une plaisanterie. Pour cela, demander des excuses à la personne, si elle n'en présente pas cela signifie que c'est délibéré.
                                 </p>
                             </div>
                         </div>
                         <div class="columns is-flex-direction-row-reverse ">
                             <i class="fa-solid fa-quote-left fa-flip-horizontal fa-2xl"></i>
                         </div>
                         <!--Insertion modal, et video youtube-->
                         <!-- <div class="box"> -->
                             <!-- <button class="js-modal-trigger" data-target="modal-js-example">
                                 <i class="fa-brands fa-youtube fa-bounce">Clique ici pour en voir plus</i>
                             </button>
                             <div id="modal-js-example" class="modal">
                                 <div class="modal-background"></div>

                                <div class="content">
                                    <div class="box"> 
                                         <p>C'est quoi le cyberharcèlement en video ?</p> -->
                                         <!--div pour afficher la video youtube avec firefox, le js est dans la page player.js-->
                                        <div class="block mt-6">
                                        <!-- Your content -->
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/kQhJmErUUlM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                                        </div>
                                        </div>
                                            <!-- </div> -->

                                 <!-- <button class="modal-close is-large" aria-label="close"></button> -->
                             </div>
                         </div>
                     </div>

                 </div>
             </section>
         </div>
     </div>
 </div>
 <div class="columns-container is-gapless" id="s-en-premunir">
     <div class="columns is-centered is-multiline is-gapless">
         <div class="column is-full is-offset-x">
             <section class="hero is-fullheight" style="background-color: #F3FAFD;" id="bkgPres">
                 <div class="hero-body">
                     <div class="container has-text-centered" id="container">
                         <h1 class="title is-1 has-text-centered" id="titre">Que faire pour s'en prémunir?</h1>
                         <!--Création d'un parallelogramme-->
                         <div class="parallelogram">
                             <p class="subtitle is-5" id="text">Il existe plusieurs manières de s'en prémunir :
                                 Configurer ses comptes de manière à laisser passer le moins d'informations sensibles possibles.
                                 Masquer les contenus violents.
                                 Ne pas divulguer vos informations personnelles ni vos mots de passe.
                                 Rester vigilant au contenu que vous diffusez et aux personnes à qui vous parlez.
                                 Faire en sorte de limiter le temps passé sur les écrans.
                                 Avoir confiance en soi et oser parler.
                             </p>
                         </div>
                         <div class="column mt-5 mb-6">
                             <i class="fa-solid fa-pencil fa-2xl"></i>
                         </div>
                         <div class="block-mt-6">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/IGhP53ahZrI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                         </div>
                     </div>
                 </div>
             </section>
         </div>
     </div>
 </div>
 <div class="columns-container is-gapless" id="consequences">
     <div class="columns is-centered is-multiline is-gapless">
         <div class="column is-full is-offset-x">
             <section class="hero is-fullheight" style="background-color: #F3FAFD;" id="bkgPres">
                 <div class="hero-body">
                     <div class="container has-text-centered" id="container">
                         <!--Permet de creer une forme-->
                         <div class="cloud" style="background-color: bisque; border-radius: 40% 10% 40% 50% / 40% 50% 10% 40%; padding: 20px; text-align: center;">
                             <h1 class="title is-1 has-text-centered" id="titre">Quelles sont les conséquences ? </h1>
                         </div>
                         <h6 class="subtitle is-5 has-text-centered" id="text">Ces agressions peuvent avoir un impact négatif sur votre santé physique et mentale.
                         </h6>
                         <figure>
                             <img id="img" style="margin-left: 900px;" src="./assets/images2.jpeg">
                         </figure>
                         <style>
                            li, .nothing{
                                color: #29478B;
                                font-weight: bold;
                            }
                            .nothing:hover{
                                background: linear-gradient(
                                45deg,
                                rgb(65, 88, 208) 0%,
                                #d4cac198 46%,
                                rgb(255, 204, 112) 100%
                            );
}
                         </style>
                         <ul>
                             <div class="cloud" style="background-color: bisque; border-radius: 10% 20% 40% 50% / 50% 30% 30% 60%; padding: 10px; text-align: center;">
                                 <li>Reclus social</li>
                             </div>
                                <li class="nothing">Anxiété</li>
                             <div class="cloud" style="background-color: bisque; border-radius: 10% 20% 40% 50% / 50% 30% 30% 60%; padding: 10px; text-align: center;">
                                 <li>Saut d'humeur</li>
                             </div>
                                <li class="nothing">Perturbation du sommeil</li>
                             <div class="cloud" style="background-color: bisque; border-radius: 10% 20% 40% 50% / 50% 30% 30% 60%; padding: 10px; text-align: center;">
                                <li>Décrochage scolaire</li>
                             </div>
                                <li class="nothing">Dépression</li>
                             <div class="cloud" style="background-color: bisque; border-radius: 10% 20% 40% 50% / 50% 30% 30% 60%; padding: 10px; text-align: center;">
                                <li>Stress</li>
                             </div>
                         </ul>
                         <figure>
                             <img id="img" style="margin-right: 1300px;" src="./assets/images111.jpeg">
                         </figure>
                     </div>
                 </div>
             </section>
         </div>
     </div>
 </div>
 <div class="columns-container is-gapless" id="pas-devenir">
     <div class="columns is-centered is-multiline is-gapless">
         <div class="column is-full is-offset-x">
             <section class="hero is-fullheight" style="background-color: #F3FAFD;" id="bkgPres">
                 <div class="hero-body">
                     <div class="container has-text-centered" id="container">
                         <h1 class="title is-1 has-text-centered" id="titre">Et pour ne pas le devenir ?</h1>
                         <br>
                         <figure>
                             <img id="img" style="width: 500px;" src="./assets/images3.jpeg">
                         </figure>
                         <br>
                         <div class="card custom-color">
                             <div class="card-content">
                                 <p class="title is-4" id="text">Réfléchissez aux conséquences avant de liker, partager ou publier</p>
                             </div>
                         </div>
                         <br>
                         <div class="card" style="background-color: #e1d5c7;">
                             <div class="card-content">
                                 <p class="title is-4" id="text">Restez clean</p>
                             </div>
                         </div>
                         <br>
                         <div class="card" style="background-color: #F4EADF;">
                             <div class="card-content">
                                 <p class="title is-4" id="text">Ayez de l'empathie</p>
                             </div>
                         </div>
                         <br>
                         <div class="card" style="background-color: #e1d5c7;">
                             <div class="card-content">
                                 <p class="title is-4" id="text">Utilisez positivement les réseaux sociaux</p>
                             </div>
                         </div>
                         <br>
                         <div class="card" style="background-color: #F4EADF;">
                             <div class="card-content">
                                 <p class="title is-4" id="text">Ne pas faire aux autres ce que l'on ne veut pas que l'on nous fasse</p>
                             </div>
                         </div>
                         <br>
                         <figure>
                             <img style="width: 650px;" src="./assets/Presentation-Cyber-harcelement.png">
                         </figure>
                     </div>
                 </div>
             </section>
         </div>
     </div>
 </div>
 <div class="columns-container is-gapless" id="loi">
     <div class="columns is-centered is-multiline is-gapless">
         <div class="column is-full is-offset-x">
             <section class="hero is-fullheight" style="background-color: #F3FAFD;" id="bkgPres">
                 <div class="hero-body">
                     <div class="container has-text-centered" id="container">
                         <h1 class="title is-1 has-text-centered" id="titre">Que dit la loi ?</h1>
                         <div class="box" id="boxLaw">
                             <div class="card-content has-background-white" style="opacity: 0.8;">
                                 <p class="subtitle is-5" id="text">Le cyberharcèlement dans son ensemble est considéré comme un délit et peut être passible de peine.</p>
                             </div>
                             <br>
                             <div class="cloud" style="background-color: white; border-radius: 10% 20% 40% 50% / 50% 30% 30% 60%; padding: 10px; text-align: center; opacity: 0.8;">
                                 <p class="subtitle is-5" id="text">° Amende de plusieurs milliers d'euros</p>
                             </div>
                             <br>
                             <div class="cloud" style="background-color: white; border-radius: 10% 20% 40% 50% / 50% 30% 30% 60%; padding: 10px; text-align: center; opacity: 0.8;">
                                 <p class="subtitle is-5" id="text">° Emprisonnement</p>
                             </div>
                             <div class="box mt-5" style="opacity: 0.8;">
                                 <p class="subtitle is-5" id="text">Harcèlement, cyberharcèlement = Jusqu'à 3 ans d'emprisonnement et 45 milles euros d'amende</p>
                             </div>
                         </div>
                         <figure>
                             <img style="border-radius: 30% 20% 40% 50%; width: 700px; height: 250px;" src="./assets/imagesP.jpeg" alt="barreau de prison">
                         </figure>
                     </div>
                 </div>
             </section>
         </div>
     </div>
 </div>
 <div class="columns-container is-gapless" id="parler">
     <div class="columns is-centered is-multiline is-gapless">
         <div class="column is-full is-offset-x">
             <section class="hero is-fullheight" style="background-color: #F3FAFD;" id="bkgPres">
                 <div class="hero-body">
                     <div class="container has-text-centered" id="container">
                         <!--Permet de supperoser des elements-->
                         <div class="overlay is-absolute is-overlay" style="top: -40%; right: 10%; left: 10%; opacity: 0.8;">
                             <div class="box  has-background-grey-light">
                                 <h1 class="title is-2 has-text-centered" id="titre">A qui en parler ?</h1>
                             </div>
                         </div>
                         <div class="box">
                             <p class="subtitle is-5" id="text">Si vous êtes ou pensez être victime de harcèlement numérique, n'hésitez pas à en parler à vos parents ou à un proche de confiance.
                                 Vous pouvez également contacter le 3018 qui est géré par l'association E-Enfance, une application mobile est également téléchargeable.
                             </p>
                         </div>
                     </div>
                 </div>
             </section>
         </div>
     </div>
 </div>
 <div class="columns-container is-gapless" id="3018">
     <div class="columns is-centered is-multiline is-gapless">
         <div class="column is-full is-offset-x">
             <section class="hero is-fullheight" style="background-color: #F3FAFD;" id="bkgPres">
                 <div class="hero-body">
                     <div class="container has-text-centered" id="container">
                         <div class="cloud" style="background-color: bisque;; border-radius: 10% 20% 40% 50% / 50% 30% 30% 60%; padding: 10px; text-align: center;">
                             <h1 class="title is-1 has-text-centered" id="titre">Le 3018</h1>
                         </div>
                         <div class="column is-align-content-end" id="question">
                             <i class="fa-solid fa-question fa-2xl" style="color: #aa7942;"></i>
                         </div>
                         <p class="subtitle is-5" id="text">Gratuit, anonyme et confidentiel, le 3018 est le numéro national pour les victimes de violences numériques. C'est le point d'entrée unique pour signaler toute situation de harcèlement et assurer une prise en charge globale et rapide de la victime.
                         </p>

                         <!--bouton pour lien video-->
                         <!-- <button class="js-modal-trigger" data-target="modal-js-example">
                             <i class="fa-brands fa-youtube fa-bounce">Clique ici pour en voir plus</i>
                         </button> -->
                         <!--modal pour afficher la video-->
                         <!-- <div id="modal-js-example" class="modal">
                             <div class="modal-background"></div> -->
                             <!--Insertion modal, et video youtube-->
                             <!-- <div class="modal-content"> -->
                                 <div class="box">
                                     <!-- <p>C'est quoi le cyberharcèlement en video ?</p> -->
                                     <!--div pour afficher la video youtube avec firefox, le js est dans la page player.js-->
                                     <div id="player3018">
                                     <!-- Your content -->
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/1e3ngFNgcAQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                     </div>
                                 </div>
                             </div>

                             <button class="modal-close is-large" aria-label="close"></button>
                         </div>

                         <!--bouton pour lien video-->
                         <button class="js-modal-trigger" data-target="modal-js-example">
                             <i class="fa-brands fa-youtube fa-bounce">Clique ici pour en voir plus</i>
                         </button>
                         <!--modal pour afficher la video-->
                         <div id="modal-js-example" class="modal">
                             <div class="modal-background"></div>
                             <!--Insertion modal, et video youtube-->
                             <div class="modal-content">
                                 <div class="box">
                                     <p>C'est quoi le cyberharcèlement en video ?</p>
                                     <!--div pour afficher la video youtube avec firefox, le js est dans la page player.js-->
                                     <div id="p3018"></div>
                                     <!-- Your content -->
                                     <iframe width="560" height="315" src="https://www.youtube.com/embed/CLLzd0Y6o-w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                 </div>
                             </div>
                        </div>
                     </div>
                 </div>
             </section>
         </div>
     </div>
 </div>
 <div class="columns-container is-gapless" id="aRetenir">
     <div class="columns is-centered is-multiline is-gapless">
         <div class="column is-full is-offset-x">
             <section class="hero is-fullheight" style="background-color: #F3FAFD;" id="bkgPres">
                 <div class="hero-body">
                     <div class="container has-text-centered" id="container">
                         <!--Permet de supperoser des elements-->
                         <div class="overlay is-absolute is-overlay">
                            <div class="parallelogram" style="height: 10%;">
                                 <h1 class="title is-2 has-text-centered" id="titre">Ce qu'il faut retenir</h1>
                             </div>
                         </div>
                         <div class="block">
                         <figure>
                             <img style=" width: 50%" src="./assets/Fiche-reflexe-cyberharcelement.jpg.webp" alt="barreau de prison">
                         </figure>
                         </div>
                     </div>
                 </div>
             </section>
         </div>
     </div>
 </main>
 </div>
 </section>
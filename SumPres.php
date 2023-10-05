<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- css link -->
  <?php echo '<link rel="stylesheet" type="text/css" href="style.css">' ?>
  <!-- <link rel="stylesheet" href="/style.css"> -->
  <!-- Bulma link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css" />
  <!-- bootstrap link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!--Lien googleFont-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Paytone One">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin Sans">
  <!--Lien icon fontawesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <title>Summ</title>
</head>

<body style="background-color: #F3FAFD;">

  <!-- sum part bootstrap-->
  <div class="py-5 scrollspy" style="background-image: url(assets/PrésentationCyber-harcèlement-2.png); background-size: cover;">
    <main class="container mt-5">
      <div class="text-center" id="text">
        <h2>Sommaire</h2>
      </div>
      <div class="d-flex justify-content-center flex-wrap">
      <!-- Crée une card avec une marge extérieure -->
        <div class="card m-3" style="width: 15rem;">
        <!-- Insère une image en haut de la carte -->
          <img class="card-img-top" src="assets/bullying-7902257_1280.png" alt="Card image cap">
          <!-- Crée le corps de la card avec une disposition flexible en colonne -->
          <div class="card-body d-flex flex-column align-items-center justify-content-center">
            <!-- Crée un élément centré horizontalement avec le texte centré aussi  -->
            <div class="text-center">
            <!-- Insère un titre  -->
              <h3 class="card-title"><small>Le cyberharcèlement, c'est quoi?</small></h3>
            </div>
            <!-- Crée un espace en bas -->
            <div class="mt-auto">
            <!-- Insère un lien boutton pour acceder à cette partie -->
              <a href="#le-cyber-harcelement-c-est-quoi" class="btn btn-primary mt-4">Voir</a>
            </div>
          </div>
        </div>
        <div class="card m-3" style="width: 15rem;">
          <img class="card-img-top" src="assets/bullying-7902257_1280.png" alt="Card image cap">
          <div class="card-body d-flex flex-column align-items-center justify-content-center">
            <div class="text-center">
              <h3 class="card-title"><small>Comment le déceler?</small></h3>
            </div>
            <div class="mt-auto">
              <a href="#deceler" class="btn btn-primary mt-4">Voir</a>
            </div>
          </div>
        </div>
        <div class="card m-3" style="width: 15rem;">
          <img class="card-img-top" src="assets/bullying-7902257_1280.png" alt="Card image cap">
          <div class="card-body d-flex flex-column align-items-center justify-content-center">
            <div class="text-center">
              <h3 class="s-en-premunir"><small>Que faire pour s'en prémunir?</small></h3>
            </div>
            <div class="mt-auto">
              <a href="#premunir" class="btn btn-primary mt-4">Voir</a>
            </div>
          </div>
        </div>
        <div class="card m-3" style="width: 15rem;">
          <img class="card-img-top" src="assets/bullying-7902257_1280.png" alt="Card image cap">
          <div class="card-body d-flex flex-column align-items-center justify-content-center">
            <div class="text-center">
              <h3 class="card-title"><small>Quelles sont les conséquences?</small></h3>
            </div>
            <div class="mt-auto">
              <a href="#consequences" class="btn btn-primary mt-4">Voir</a>
            </div>
          </div>
        </div>
        <div class="card m-3" style="width: 15rem;">
          <img class="card-img-top" src="assets/bullying-7902257_1280.png" alt="Card image cap">
          <div class="card-body d-flex flex-column align-items-center justify-content-center">
            <div class="text-center">
              <h3 class="card-title"><small>Et pour ne pas le devenir</small></h3>
            </div>
            <div class="mt-auto">
              <a href="#pas-devenir" class="btn btn-primary mt-4">Voir</a>
            </div>
          </div>
        </div>
        <div class="card m-3" style="width: 15rem;">
          <img class="card-img-top" src="assets/bullying-7902257_1280.png" alt="Card image cap">
          <div class="card-body d-flex flex-column align-items-center justify-content-center">
            <div class="text-center">
              <h3 class="card-title"><small>Que dit la loi</small></h3>
            </div>
            <div class="mt-auto">
              <a href="#loi" class="btn btn-primary mt-4">Voir</a>
            </div>
          </div>
        </div>
        <div class="card m-3" style="width: 15rem;">
          <img class="card-img-top" src="assets/bullying-7902257_1280.png" alt="Card image cap">
          <div class="card-body d-flex flex-column align-items-center justify-content-center">
            <div class="text-center">
              <h3 class="card-title"><small>A qui en parler?</small></h3>
            </div>
            <div class="mt-auto">
              <a href="#parler" class="btn btn-primary mt-4">Voir</a>
            </div>
          </div>
        </div>
        <div class="card m-3" style="width: 15rem;">
          <img class="card-img-top" src="assets/bullying-7902257_1280.png" alt="Card image cap">
          <div class="card-body d-flex flex-column align-items-center justify-content-center">
            <div class="text-center">
              <h3 class="card-title"><small>Le 3018</small></h3>
            </div>
            <div class="mt-auto">
              <a href="#3018" class="btn btn-primary mt-4">Voir</a>
            </div>
          </div>
        </div>

      </div>
    </main>
  </div>
  <!-- end sum part -->

  <!-- presentation part Bulma-->
  <section class="section">
      <div class="container">
          <div class="columns is-centered is-multiline">

              <div class="column is-full" id="le-cyber-harcelement-c-est-quoi">
                <!-- integre une carte -->
                  <div class="card" id="PresBkg" >
                    <!-- contenu d'une carte -->
                      <div class=" card-content">
                          <div class="content has-text-centered">
                          <h1 class="title is-2 has-text-centered is-info" id="titre">Le cyber-harcèlement c'est quoi?</h1>
                          <div class="card">
                              <p class="subtitle is-4 has-text-centered" id="text">C'est une forme d'agression numérisée mais tout aussi réelle qui se caractérise par une action répétée visant à nuire à une personne ou à un groupe de personnes, via les réseaux sociaux, les applications de messagerie ou les jeux en ligne.</p>
                          </div>
                          <div class="columns mt-4">
                            <!-- définit taille colonne -->
                              <div class="column is-one-third">
                                  <figure class="image is-hidden-mobile">
                                      <img class="is-rounded" style="max-width: 200px;" src="./assets/composition-cyber-intimidation.jpg.avif" alt="mains-humaines-pointant-vers-une-personne-fond-bleu">
                                  </figure>
                                </div>
                              <div class="column is-one-third">
                                  <figure class="image is-16by9">
                                      <!-- Your content -->
                                      <iframe class="has-ratio" width="460" height="215" src="https://www.youtube.com/embed/zUW3JyLtYsQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                  </figure>
                              </div>
                              <div class="column is-one-third">
                                  <figure class="image is-hidden-mobile">
                                      <img class="is-rounded" style="max-width: 200px;" src="./assets/concept-cyberintimidation_23-2148595215.jpg.avif" alt="mains-humaines-pointant-vers-une-personne-fond-bleu">
                                  </figure>
                              </div>
                          </div>
                      </div>
                  </div>
          </div>
      </div>


    <div class="column is-full" id="deceler">
      <div class="card" id="PresBkg">
        <div class="card-content has-text-white">
          <div class="content has-text-centered">
            <h1 class="title is-1 has-text-centered" id="titre">Comment le déceler ?</h1>
              <div class="card">
                <div class="columns mx-5 ">
                  <i class="fa-solid fa-quote-left fa-2xl"></i>
                </div>
                <h4 class="subtitle is-5" id="text">Il se matérialise sous différentes formes:
                    Messages irrespectueux, violents.
                    Incitation à faire des choses contre sa volonté, comme s'auto-mutiler.
                    Diffusion d'image ou vidéo en ligne contre le consentement de la personne.
                    Usurpation d'identité digitale
                </h4>
              </div>
              <div class="card mt-3">
                <h4 class="subtitle is-5 mb-5" id="text">
                   Ce sont généralement des actes répétés et intentionnels, mais il peut parfois être difficile de faire la différence avec une plaisanterie. Pour cela, demander des excuses à la personne, si elle n'en présente pas cela signifie que c'est délibéré.
                </h4>
                <div class="columns is-flex-direction-row-reverse ">
                    <i class="fa-solid fa-quote-left fa-flip-horizontal fa-2xl"></i>
                </div>
              </div>
              <div class="columns mt-3">
                  <div class="column is-one-third">
                      <figure class="image is-hidden-mobile">
                            <img class="is-rounded" style="max-width: 200px;" src="./assets/images9.jpeg" alt="mains-humaines-pointant-vers-une-personne-fond-bleu">
                      </figure>
                  </div>
                  <div class="column is-one-third">
                      <figure class="image is-16by9">
                          <!-- Your content -->
                          <iframe class="has-ratio" width="460" height="215" src="https://www.youtube.com/embed/kQhJmErUUlM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                      </figure>
                  </div>
                  <div class="column is-one-third">
                      <figure class="image is-hidden-mobile">
                            <img class="is-rounded" style="max-width: 200px;" src="./assets/concept-illustration-cyberintimidation_23-2148602246.jpg.avif" alt="mains-humaines-pointant-vers-une-personne-fond-bleu">
                      </figure>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>

    <div class="column is-full" id="premunir">
      <div class="card" id="PresBkg">
        <div class="card-content has-text-white">
          <div class="content has-text-centered">
          <h1 class="title is-1 has-text-centered" id="titre">Que faire pour s'en prémunir?</h1>
          <div class="parallelogram">
             <h4 class="subtitle is-5 has-text-centered" id="text">Il existe plusieurs manières de s'en prémunir :
               Configurer ses comptes de manière à laisser passer le moins d'informations sensibles possibles.
               Masquer les contenus violents.
               Ne pas divulguer vos informations personnelles ni vos mots de passe.
               Rester vigilant au contenu que vous diffusez et aux personnes à qui vous parlez.
               Faire en sorte de limiter le temps passé sur les écrans.
               Avoir confiance en soi et oser parler.
              </h4>
          </div>
          <div class="card noParallelogram">
             <h4 class="subtitle is-5 has-text-centered" id="text">Il existe plusieurs manières de s'en prémunir :
               Configurer ses comptes de manière à laisser passer le moins d'informations sensibles possibles.
               Masquer les contenus violents.
               Ne pas divulguer vos informations personnelles ni vos mots de passe.
               Rester vigilant au contenu que vous diffusez et aux personnes à qui vous parlez.
               Faire en sorte de limiter le temps passé sur les écrans.
               Avoir confiance en soi et oser parler.
              </h4>
          </div>
          <!-- pour une raison que je n'explique pas, ce code ne s'affiche pas quand il est dans le style.css -->
            <style>
              @media screen and (max-width:768px){
                .parallelogram {
                    display: none;
                }
                .noParallelogram {
                    display: block;
                    border: #3861c1, solid, 2px;
                }
              }
              /* Pr agrandir img au survol, ne fonctionne pas */
              /* #ficheReflex {
                width: 200px;
                transition: transform .1s;
              }
              #ficheReflex:hover {
                -ms-transform: scale(1.5);
                -webkit-transform: scale(1.5); 
                transform: scale(1.5);
              } */
 
            </style>
            <!-- Fin du style css -->
            <div class="columns mt-3 flex justify-content-center">
                <div class="column is-one-third">
                    <figure class="image is-16by9">
                        <iframe class="has-ratio" width="460" height="215" src="https://www.youtube.com/embed/IGhP53ahZrI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </figure>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="column is-full" id="consequences">
          <div class="card" id="PresBkg" >
              <div class="card-content">
                  <div class="content has-text-centered">
                      <h1 class="title is-2 has-text-centered is-info" id="titre">Quelles sont les conséquences</h1>
                      <p class="subtitle is-4 has-text-centered " id="text">Ces agressions peuvent avoir un impact négatif sur votre santé physique et mentale, affectant à la fois votre bien-être émotionnel et psychologique. Elles peuvent engendrer divers problèmes, comme:</p>
                        <figure class="image is-hidden-mobile">
                            <img id="img" style="margin-left: 900px; max-width: 200px;" src="./assets/images2.jpeg">
                        </figure>
                        <div class="content has-text-centered" id="desktop">
                          <ul style="list-style-type: none;">
                          <!-- "is-hidden-mobile" ne fonctionne pas que pour les img -->
                             <div class=" cloud" style="background-color: bisque; border-radius: 10% 20% 40% 50% / 50% 30% 30% 60%; padding: 10px; text-align: center;">
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
                      </div>

                      <figure class="image is-hidden-mobile">
                          <img id="img" style="margin-right: 1300px; max-width: 200px;" src="./assets/images111.jpeg">
                      </figure>

                    </div>
              </div>
          </div>
    </div>

    <div class="column is-full" id="pas-devenir">
      <div class="card" id="PresBkg">
        <div class="card-content has-text-white">
          <div class="content has-text-centered">
          <h1 class="title is-1 has-text-centered" id="titre">Et pour ne pas le devenir ?</h1>
          <figure class="image is-hidden-mobile">
               <img id="img" style="width: 500px;" src="./assets/images3.jpeg">
          </figure>
          <div class="card custom-color mb-5">
                         <div class="card has-text-centered">
                                 <h4 class="title is-4 has-text-centered mb-3" id="text">Réfléchissez aux conséquences avant de liker, partager ou publier</h4>
                         </div>
                         <div class="card mt-2" style="background-color: #e1d5c7;">
                                 <h4 class="title is-4 has-text-centered mb-3" id="text">Restez clean</h4>
                         </div>
                         <div class="card mt-2" style="background-color: #F4EADF;">
                                 <h4 class="title is-4 has-text-centered mb-3" id="text">Ayez de l'empathie</h4>
                         </div>
                         <div class="card mt-2" style="background-color: #e1d5c7;">
                                 <h4 class="title is-4 has-text-centered mb-3" id="text">Utilisez positivement les réseaux sociaux</h4>
                         </div>
                         <div class="card mt-2" style="background-color: #F4EADF;">
                                 <h4 class="title is-4 has-text-centered mb-3" id="text">Ne pas faire aux autres ce que l'on ne veut pas que l'on nous fasse</h4>
                         </div>
                         <figure class="is-hidden-mobile" style="background-image: url(assets/PrésentationCyber-harcèlement-2.png); background-size: cover;">
                             <img style="width: 650px;" src="./assets/Presentation-Cyber-harcelement.png">
                         </figure>
                     </div>
          </div>
        </div>
      </div>
    </div>

    <div class="column is-full" id="loi">
      <div class="card" id="PresBkg">
        <div class="card-content has-text-white">
          <div class="content has-text-centered">
              <h1 class="title is-1 has-text-centered" id="titre">Que dit la loi ?</h1>
              <div class="box" id="boxLaw">
                <ul>
                  <div class="cloud has-background-white flex has-text-centered" style="opacity: 0.8; border-radius: 10% 20% 40% 50% / 50% 30% 30% 60%; padding: 10px; ">
                     <li style="font-size: large;">Le cyberharcèlement dans son ensemble est considéré comme un délit et peut être passible de peine.</li>
                  </div>
                  <div class="cloud mt-2 flex has-text-centered" style="background-color: white; border-radius: 10% 20% 40% 50% / 50% 30% 30% 60%; padding: 10px; text-align: center; opacity: 0.8;">
                      <li style="font-size: large;">Amende de plusieurs milliers d'euros</li>
                  </div>
                  <div class="cloud mt-2" style="background-color: white; border-radius: 10% 20% 40% 50% / 50% 30% 30% 60%; padding: 10px; text-align: center; opacity: 0.8;">
                     <li style="font-size: large;">Emprisonnement</li>
                  </div>
                  <div class="cloud has-background-white mt-2" style="opacity: 0.8; border-radius: 10% 20% 40% 50% / 50% 30% 30% 60%; padding: 10px; text-align: center;">
                     <li style="font-size: large;">Harcèlement, cyberharcèlement = Jusqu'à 3 ans d'emprisonnement et 45 milles euros d'amende</li>
                 </div>
                </ul>
              </div>
              <div class="columns ">
                <div class="column is-one-third">
                  <figure class="is-hidden-mobile">
                    <img style="border-radius: 30% 20% 40% 50%; max-width: 250px; height: 200px;" src="./assets/imagesP.jpeg" alt="barreau de prison">
                  </figure>
                </div>
                <div class="column is-one-third">
                  <figure class="image is-16by9">
                      <iframe class="has-ratio" width="460" height="215" src="https://www.youtube.com/embed/blar1yAMXWQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  </figure>
                </div>
                <div class="column is-one-third">
                  <figure class="is-hidden-mobile">
                    <img style="border-radius: 30% 20% 40% 50%; max-width: 250px; height: 200px;" src="./assets/UnknownP.jpeg" alt="marteau de juge">
                  </figure>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>

    <div class="column is-full" id="parler">
      <div class="card" id="PresBkg">
        <div class="card-content has-text-white">
          <div class="content has-text-centered mt-6">
            <div class="overlay is-absolute is-overlay" style="top: 2%; right: 10%; left: 10%; opacity: 0.8;">
              <div class="box  has-background-grey-light">
                <h1 class="title is-2 has-text-centered" id="titre">A qui en parler ?</h1>
              </div>
            </div>
            <div class="box">
              <h5 class="subtitle is-5 has-text-centered" id="text">Si vous êtes ou pensez être victime de harcèlement numérique, n'hésitez pas à en parler à vos parents ou à un proche de confiance.
                  Vous pouvez également contacter le <span style="color:yellow">3018</span> qui est géré par l'association <a href="https://e-enfance.org/" class="button" style="border: none;"><span style="color:yellow">E-Enfance</span></a>, une application mobile est également téléchargeable.
              </h5>
            </div>
            <div class="columns mt-3 flex justify-content-center">
              <div class="column is-one-third">
                <figure class="image is-16by9">
                    <iframe class="has-ratio" width="460" height="215" src="https://www.youtube.com/embed/CLLzd0Y6o-w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="column is-full" id="3018">
      <div class="card" id="PresBkg">
        <div class="card-content has-text-white">
          <div class="content has-text-centered">
            <div class="container has-text-centered" id="container">
              <div class="cloud" style="background-color: bisque;; border-radius: 10% 20% 40% 50% / 50% 30% 30% 60%; padding: 10px; text-align: center;">
                <h1 class="title is-1 has-text-centered" id="titre">Le 3018</h1>
              </div>
              <div class="column is-align-content-end" id="question">
                <i class="fa-solid fa-question fa-2xl" style="color: #aa7942;"></i>
              </div>
                <h5 class="subtitle is-5 has-text-centered" id="text">Gratuit, anonyme et confidentiel, le 3018 est le numéro national pour les victimes de violences numériques. C'est le point d'entrée unique pour signaler toute situation de harcèlement et assurer une prise en charge globale et rapide de la victime.</h5>
              </div>
          </div>
        </div>
        <div class="columns mt-3 flex justify-content-center">
          <div class="column is-one-third">
            <figure class="image is-16by9">
              <iframe class="has-ratio" width="460" height="215" src="https://www.youtube.com/embed/1e3ngFNgcAQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </figure>
          </div>
        </div>
      </div>
    </div>

    <div class="column is-full">
      <div class="card" id="">
        <div class="card-content has-text-white">
              <h3 class="title is-2 has-text-centered" id="titre">Ce qu'il faut retenir</h3>
        </div>
              <div class="card-image">
              <!-- https://www.codeur.com/tuto/css/effet-zoom-sur-image-au-hover/, pour agrandir l'image -->
                <figure class="image is-4by3" style="@media screen and (max-width: 768px) {width: 100%; max-width: 500px; height: auto;}">
                  <img src="./assets/Fiche-reflexe-cyberharcelement.jpg.webp" alt="les points à retenir sur le cyber-harcèlement" id="ficheReflex">
                </figure>
              </div>
        
      </div>
    </div>
  </div>
</div>
</section>
<!-- end pres part -->
</body>

</html>
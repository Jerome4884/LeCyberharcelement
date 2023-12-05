<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- css link -->
  <!-- <?php echo '<link rel="stylesheet" type="text/css" href="style.css">' ?> -->
  <!-- <link rel="stylesheet" type="text/css" href="./style.css"> -->
  <!-- <link rel="stylesheet" href="style.css"> -->
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

  <title>Présentation</title>
</head>

<body style="background-color: #F3FAFD;">

  <!-- <nav class="navbar navbar-expand-lg navbar" style="background-color: #d4cac170;">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="assets/LOGO AEGIS.png" alt="logo" width="30%"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href=" . " style="text-decoration: none; color: #29478B;">Accueil<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?routing=sommairePresentation" style="text-decoration: none; color: #29478B;">Présentation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?routing=quizPresentation" style="text-decoration: none; color: #29478B;">Quiz</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?routing=aPropos" style="text-decoration: none; color: #29478B;">A propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?routing=contact" style="text-decoration: none; color: #29478B;">Contact</a>
          </li>
        </ul>
        <div class="container fluid">
          <a href="?routing=login" style="text-decoration: none; color: #29478B;" class="btn btn-outline-light my-2 my-sm-0">Se connecter</a>
          <a href="?routing=disconnect" style="text-decoration: none; color: #29478B;" class="btn btn-outline-light my-2 my-sm-0">Se déconnecter</a>
        </div>
      </div>
  </nav> -->

  <!-- sum part -->
  <div class="py-5" style="background-image: url(assets/PrésentationCyber-harcèlement-2.png); background-size: cover;">
    <main class="container mt-5">
      <div class="text-center" id="titre">
        <h2>Sommaire</h2>
      </div>
      <div class="d-flex justify-content-center flex-wrap">
        <div class="card m-3" style="width: 15rem;">
          <img class="card-img-top" style="height:30vh; max-height:35vh; border:1px solid #29478B" src="assets/bullying-7902257_1280.png" alt="Card image cap">
          <div class="card-body d-flex flex-column align-items-center justify-content-center">
            <div class="text-center">
              <h3 class="card-title" id="text"><small>Le cyberharcèlement, c'est quoi?</small></h3>
            </div>
            <div class="mt-auto">
              <a href="#le-cyber-harcelement" class="btn btn-primary mt-4">Voir</a>
            </div>
          </div>
        </div>
        <div class="card m-3" style="width: 15rem;">
          <img class="card-img-top" style="height:30vh; max-height:35vh; border:1px solid #29478B" src="assets/834453-garcon-avec-des-points-d-interrogation-vectoriel.jpg" alt="mains-humaines-pointant-vers-une-personne-fond-bleu">
          <div class="card-body d-flex flex-column align-items-center justify-content-center">
            <div class="text-center">
              <h3 class="card-title" id="text"><small>Comment le déceler?</small></h3>
            </div>
            <div class="mt-auto">
              <a href="#comment-le-deceler" class="btn btn-primary mt-4">Voir</a>
            </div>
          </div>
        </div>
        <div class="card m-3" style="width: 15rem;">
          <img class="card-img-top" style="height:30vh; max-height:35vh; border:1px solid #29478B" src="assets/bouclier.jpeg" alt="Card image cap">
          <div class="card-body d-flex flex-column align-items-center justify-content-center">
            <div class="text-center">
              <h3 class="" id="text"><small>Que faire pour s'en prémunir?</small></h3>
            </div>
            <div class="mt-auto">
              <a href="#s-en-premunir" class="btn btn-primary mt-4">Voir</a>
            </div>
          </div>
        </div>
        <div class="card m-3" style="width: 15rem;">
          <img class="card-img-top" style="height:30vh; max-height:35vh; border:1px solid #29478B" src="assets/fille-triste-depression-nuage-noir-autocollant.jpg" alt="Card image cap">
          <div class="card-body d-flex flex-column align-items-center justify-content-center">
            <div class="text-center">
              <h3 class="card-title" id="text"><small>Quelles sont les conséquences?</small></h3>
            </div>
            <div class="mt-auto">
              <a href="#consequences" class="btn btn-primary mt-4">Voir</a>
            </div>
          </div>
        </div>
        <div class="card m-3" style="width: 15rem;">
          <img class="card-img-top" style="height:30vh; max-height:35vh; border:1px solid #29478B" src="assets/qui harcele.jpeg" alt="Card image cap">
          <div class="card-body d-flex flex-column align-items-center justify-content-center">
            <div class="text-center">
              <h3 class="card-title" id="text"><small>Et pour ne pas le devenir</small></h3>
            </div>
            <div class="mt-auto">
              <a href="#pas-devenir" class="btn btn-primary mt-4">Voir</a>
            </div>
          </div>
        </div>
        <div class="card m-3" style="width: 15rem;">
          <img class="card-img-top" style="height:30vh; max-height:35vh; border:1px solid #29478B" src="assets/juge.jpeg" alt="Card image cap">
          <div class="card-body d-flex flex-column align-items-center justify-content-center">
            <div class="text-center">
              <h3 class="card-title" id="text"><small>Que dit la loi</small></h3>
            </div>
            <div class="mt-auto">
              <a href="#loi" class="btn btn-primary mt-4">Voir</a>
            </div>
          </div>
        </div>
        <div class="card m-3" style="width: 15rem;">
          <img class="card-img-top" style="height:30vh; max-height:35vh; border:1px solid #29478B" src="assets/pexels-photo-7662853.jpeg" alt="Card image cap">
          <div class="card-body d-flex flex-column align-items-center justify-content-center">
            <div class="text-center">
              <h3 class="card-title" id="text"><small>A qui en parler?</small></h3>
            </div>
            <div class="mt-auto">
              <a href="#parler" class="btn btn-primary mt-4">Voir</a>
            </div>
          </div>
        </div>
        <div class="card m-3" style="width: 15rem;">
          <img class="card-img-top" style="height:30vh; max-height:35vh; border:1px solid #29478B" src="assets/3018.png" alt="Card image cap">
          <div class="card-body d-flex flex-column align-items-center justify-content-center">
            <div class="text-center">
              <h3 class="card-title" id="text"><small>Le 3018</small></h3>
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

  <!-- presentation part -->
  <section class="section">
      <div class="container">
          <div class="columns is-centered is-multiline">

              <div class="column is-full">
                  <div class="card" id="PresBkg" >
                      <div class="card-content">
                          <div class="content has-text-centered" id="le-cyber-harcelement">
                            <div class="columns">
                              <div class="column is-2">
                                <figure class="image">
                                  <img style="width:150px; margin-top:-30px; padding-right:15px ; " src="assets/LOGO AEGIS.png" alt="logo">
                                </figure>
                              </div>
                              <div class="column is-8">
                                <h1 class="title is-2 has-text-centered is-info" id="titre">Le cyber-harcèlement c'est quoi?</h1>
                              </div>
                            </div>
                          <div class="card" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                              <p class="subtitle is-4 has-text-centered" id="text">C'est une forme d'agression numérisée mais tout aussi réelle qui se caractérise par une action répétée visant à nuire à une personne ou à un groupe de personnes, via les réseaux sociaux, les applications de messagerie ou les jeux en ligne.</p>
                          </div>
                          <div class="columns mt-4">
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


    <div class="column is-full">
      <div class="card" id="PresBkg">
        <div class="card-content has-text-white">
          <div class="content has-text-centered" id="comment-le-deceler">
            <div class="columns">
              <div class="column is-2">
                <figure class="image">
                  <img style="width:150px; margin-top:-30px; padding-right:15px ; " src="assets/LOGO AEGIS.png" alt="logo">
                </figure>
              </div>
              <div class="column is-8">
                <h1 class="title is-1 has-text-centered" id="titre">Comment le déceler ?</h1>
              </div>
            </div>

            <div class="card">
              <div class="columns mx-5 ">
                <i class="fa-solid fa-quote-left fa-2xl"></i>
              </div>
              <h4 class="subtitle is-5" id="text">Il se matérialise sous différentes formes:
                  Messages irrespectueux, violents.
                  Incitation à faire des choses contre sa volonté, comme s'auto-mutiler.
                  Diffusions d'images ou vidéos en ligne sans le consentement de la personne.
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

    <div class="column is-full">
      <div class="card" id="PresBkg">
        <div class="card-content has-text-white">
          <div class="content has-text-centered" id="s-en-premunir">
            <div class="columns">
                <div class="column is-2">
                  <figure class="image">
                    <img style="width:150px; margin-top:-30px; padding-right:15px ; " src="assets/LOGO AEGIS.png" alt="logo">
                  </figure>
                </div>
                <div class="column is-8">
                  <h1 class="title is-1 has-text-centered" id="titre">Que faire pour s'en prémunir?</h1>
                </div>
            </div>
          <div class="box" style="background-color: #d4cac170;">
             <h4 class="subtitle is-5 has-text-centered" id="text" style="background-color: #B2BCCF; border-radius: 15px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">Il existe plusieurs manières de s'en prémunir :
               Configurer ses comptes de manière à laisser passer le moins d'informations sensibles possibles.
               Masquer les contenus violents.
               Ne pas divulguer vos informations personnelles ni vos mots de passe.
               Rester vigilant au contenu que vous diffusez et aux personnes à qui vous parlez.
               Faire en sorte de limiter le temps passé sur les écrans.
               Avoir confiance en soi et oser parler.
              </h4>
          </div>
          <div class="card" style="display: none;">
             <h4 class="subtitle is-5 has-text-centered" id="text">Il existe plusieurs manières de s'en prémunir :
               Configurer ses comptes de manière à laisser passer le moins d'informations sensibles possibles.
               Masquer les contenus violents.
               Ne pas divulguer vos informations personnelles ni vos mots de passe.
               Rester vigilant au contenu que vous diffusez et aux personnes à qui vous parlez.
               Faire en sorte de limiter le temps passé sur les écrans.
               Avoir confiance en soi et oser parler.
              </h4>
          </div>
          
          <!-- pour une raison inconnu, ce code ne s'affiche pas quand il est dans le style.css -->
            <style>
              @media screen and (max-width:768px){
                .parallelogram1 {
                    display: none;
                }
                .noParallelogram1 {
                    display: block;
                    border: #3861c1, solid, 2px;
                }
                #titre{
                    font-size: 3.5vh;
                }
                #text{
                    font-size: 4vh;
                    text-align: center;
                }
              }              
                /* #desktop {
                    display: none;
                }
                #mobile {
                    display: block;
                    border: #3861c1, solid, 2px;
                }
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

    <div class="column is-full">
      <div class="card" id="PresBkg" >
          <div class="card-content">
              <div class="content has-text-centered" id="consequences">
                <div class="columns">
                  <div class="column is-2">
                    <figure class="image">
                      <img style="width:150px; margin-top:-30px; padding-right:15px ; " src="assets/LOGO AEGIS.png" alt="logo">
                    </figure>
                  </div>
                  <div class="column is-8">
                    <h1 class="title is-2 has-text-centered is-info" id="titre">Quelles sont les conséquences</h1>
                  </div>
              </div>
              <p class="subtitle is-4 has-text-centered " id="text" style="background-color: #B2BCCF; border-radius: 15px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">Ces agressions peuvent avoir un impact négatif sur votre santé physique et mentale, affectant à la fois votre bien-être émotionnel et psychologique. Elles peuvent engendrer divers problèmes, comme:</p>
                <figure class="image is-hidden-mobile">
                    <img id="img" style="margin-left: 900px; max-width: 200px;" src="./assets/images2.jpeg">
                </figure>
                <div class="content has-text-centered" id="desktop">
                  <!-- <ul style="list-style-type: none;"> -->
                  <!-- "is-hidden-mobile" ne fonctionne pas que pour les img -->
                      <!-- <div class="cloud is-hidden-mobile" style="background-color: bisque; border-radius: 10% 20% 40% 50% / 50% 30% 30% 60%; padding: 10px; text-align: center;"> -->
                          <p class="subtitle is-3" id="text" style="background-color: bisque; border-radius: 10% 20% 40% 50% / 50% 30% 30% 60%; padding: 10px; text-align: center;">Reclus social</p>
                      <!-- </div> -->
                        <p class="subtitle is-3" id="text">Anxiété</p>
                      <!-- <div class="cloud" style="background-color: bisque; border-radius: 10% 20% 40% 50% / 50% 30% 30% 60%; padding: 10px; text-align: center;"> -->
                          <p class="subtitle is-3" id="text" style="background-color: bisque; border-radius: 10% 20% 40% 50% / 50% 30% 30% 60%; padding: 10px; text-align: center;">Saut d'humeur</p>
                      <!-- </div> -->
                        <p class="subtitle is-3" id="text">Perturbation du sommeil</p>
                      <!-- <div class="cloud" style="background-color: bisque; border-radius: 10% 20% 40% 50% / 50% 30% 30% 60%; padding: 10px; text-align: center;"> -->
                        <p class="subtitle is-3" id="text" style="background-color: bisque; border-radius: 10% 20% 40% 50% / 50% 30% 30% 60%; padding: 10px; text-align: center;">Décrochage scolaire</p>
                      <!-- </div> -->
                        <p class="subtitle is-3" id="text">Dépression</p>
                      <!-- <div class="cloud" style="background-color: bisque; border-radius: 10% 20% 40% 50% / 50% 30% 30% 60%; padding: 10px; text-align: center;"> -->
                        <p class="subtitle is-3" id="text" style="background-color: bisque; border-radius: 10% 20% 40% 50% / 50% 30% 30% 60%; padding: 10px; text-align: center;">Stress</p>
                      <!-- </div> -->
                  <!-- </ul> -->
              </div>
              <figure class="image is-hidden-mobile">
                  <img id="img" style="margin-right: 1300px; max-width: 200px;" src="./assets/images111.jpeg">
              </figure>
            </div>
          </div>
      </div>
    </div>

    <div class="column is-full">
      <div class="card" id="PresBkg">
        <div class="card-content has-text-white">
          <div class="content has-text-centered" id="pas-devenir">
            <div class="columns">
              <div class="column is-2">
                <figure class="image">
                  <img style="width:150px; margin-top:-30px; padding-right:15px ; " src="assets/LOGO AEGIS.png" alt="logo">
                </figure>
              </div>
              <div class="column is-8">
                <h1 class="title is-1 has-text-centered" id="titre">Et pour ne pas le devenir ?</h1>
              </div>
            </div>
            <figure class="image is-hidden-mobile">
                <img id="img" style="width: 500px;" src="./assets/images3.jpeg">
            </figure>
            <div class="card custom-color mb-5">
                <div class="card has-text-centered">
                        <h4 class="title is-4 has-text-centered mb-3" id="text">Réfléchissez aux conséquences avant de liker, partager ou publier</h4>
                </div>
                <div class="card mt-2" style="background-color: #e1d5c7;">
                        <h4 class="title is-4 has-text-centered mb-3" id="text">Restez courtois</h4>
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
                <figure class="is-hidden-mobile" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; background-image: url(assets/PrésentationCyber-harcèlement-2.png); background-size: cover;">
                    <img style="width: 650px; " src="./assets/Presentation-Cyber-harcelement.png">
                </figure>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="column is-full">
      <div class="card" id="PresBkg">
        <div class="card-content has-text-white">
          <div class="content has-text-centered" id="loi">
            <div class="columns">
                <div class="column is-2">
                  <figure class="image">
                    <img style="width:150px; margin-top:-30px; padding-right:15px ; " src="assets/LOGO AEGIS.png" alt="logo">
                  </figure>
                </div>
                <div class="column is-8">
                  <h1 class="title is-1 has-text-centered" id="titre">Que dit la loi ?</h1>
                </div>
              </div>
              <div class="box" id="boxLaw">
                <!-- <div class="columns is-multiline is-mobile"> -->
                  <div class="column auto cloud has-background-white " style="opacity: 0.8; border-radius: 10% 20% 40% 50% / 50% 30% 30% 60%; padding: 1px; ">
                     <p class="subtitle is-3 has-text-centered is-size-6-mobile" id="text">Le cyber-harcèlement dans son ensemble est considéré comme un délit et peut être passible de sanction.</p>
                  </div>
                  <div class="column auto cloud mt-2 flex has-text-centered" style="background-color: white; border-radius: 10% 20% 40% 50% / 50% 30% 30% 60%; padding: 1px; text-align: center; opacity: 0.8;">
                      <p class="subtitle is-3 has-text-centered is-size-6-mobile" id="text">L'amende peut atteindre plusieurs milliers d'euros selon les cas</p>
                  </div>
                  <!-- <div class="column auto cloud mt-2" style="background-color: white; border-radius: 10% 20% 40% 50% / 50% 30% 30% 60%; padding: 1px; text-align: center; opacity: 0.8;">
                     <p class="subtitle is-3 has-text-centered is-size-6-mobile" id="text">C'est passible d'emprisonnement</p>
                  </div> -->
                  <div class="column auto cloud has-background-white mt-2" style="opacity: 0.8; border-radius: 10% 20% 40% 50% / 50% 30% 30% 60%; padding: px; text-align: center;">
                     <p class="subtitle is-3 has-text-centered is-size-6-mobile" id="text">Cyber-harcèlement = Jusqu'à 3 ans d'emprisonnement et 45 milles euros d'amende</p>
                 </div>
                 <!-- </div> -->
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

    <div class="column is-full">
      <div class="card" id="PresBkg">
        <div class="card-content has-text-white">
          <div class="content has-text-centered mt-6">
          <div class="columns">
            <div class="column is-2" >
              <figure class="image is-hidden-mobile">
                <img style="width:150px; margin-top:-65px; margin-left:-70px ; " src="assets/LOGO AEGIS.png" alt="logo">
              </figure>
            </div>
            <div class="column is-8">
              <div class="overlay is-absolute is-overlay" style="top: 2%; right: 10%; left: 10%; opacity: 0.8;">
                <div class="box has-background-grey-light" id="parler">
                  <h1 class="title is-2 has-text-centered" id="titre">A qui en parler ?</h1>
                </div>
              </div>
            </div>
          </div>

            <div class="box">
              <h5 class="subtitle is-5 has-text-centered" id="text">Si vous êtes ou pensez être victime de harcèlement numérique, n'hésitez pas à en parler à vos parents ou à un proche de confiance.
                  Vous pouvez également contacter le <span style="color:yellow">3018</span> qui est géré par l'association <a href="https://e-enfance.org/" class="button" style="border: none;"><span style="color:yellow">E-Enfance</span></a>, une application mobile est également téléchargeable sur apple store et play store.
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

    <div class="column is-full">
      <div class="card" id="PresBkg">
        <div class="card-content has-text-white">
          <div class="content has-text-centered" id="3018">
            <div class="container has-text-centered" id="container">
              <div class="columns">
                  <div class="column is-2">
                    <figure class="image">
                      <img style="width:180px; margin-top:-30px; margin-right:15px ; " src="assets/LOGO AEGIS.png" alt="logo">
                    </figure>
                  </div>
                  <div class="column is-8">
                    <div class="cloud" style="background-color: bisque;; border-radius: 10% 20% 40% 50% / 50% 30% 30% 60%; padding: 10px; text-align: center;">
                      <h1 class="title is-1 has-text-centered" id="titre">Le 3018</h1>
                    </div>
                  </div>
                </div>

              <div class="column is-align-content-end" id="question">
                <i class="fa-solid fa-question fa-2xl" style="color: #aa7942;"></i>
              </div>
                <h5 class="subtitle is-5 has-text-centered" id="text" style="background-color: #B2BCCF; border-radius: 15px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">Gratuit, anonyme et confidentiel, le 3018 est le numéro national pour les victimes de violences numériques. C'est le point d'entrée unique pour signaler toute situation de harcèlement et assurer une prise en charge globale et rapide de la victime.</h5>
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

    <div class="column is-full is-hidden-mobile">
      <div class="card" id="PresBkg">
        <div class="card-content has-text-white">
          <div class="content has-text-centered">
            <div class="overlay is-absolute is-overlay">
              <div class="parallelogram" style="height: 10%;">
                <h3 class="title is-2 has-text-centered" id="titre">Ce qu'il faut retenir</h3>
              </div>
              <div class="noParallelogram" style="height: 10%;">
                <h3 class="title is-2 has-text-centered" id="titre">Ce qu'il faut retenir</h3>
              </div>
            </div>
            <div class="columns is-centered mt-6">
              <div class="column is-full mt-6">
                  <figure class="image  ">
                      <img style=" width: 70%" src="./assets/Fiche-reflexe-cyberharcelement.jpg.webp" alt="les points à retenir sur le cyber-harcèlement">
                  </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- end pres part -->
</body>

</html>
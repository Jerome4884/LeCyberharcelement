<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php echo '<link rel="stylesheet" type="text/css" href="style.css">' ?>
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

  <nav class="navbar navbar-expand-lg navbar" style="background-color: #d4cac170;">
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
  </nav>

  <!-- sum part -->
  <div class="py-5" style="background-image: url(assets/PrésentationCyber-harcèlement-2.png); background-size: cover;">
    <main class="container mt-5">
      <div class="text-center" id="text">
        <h2>Sommaire</h2>
      </div>
      <div class="d-flex justify-content-center flex-wrap">
        <div class="card m-3" style="width: 15rem;">
          <img class="card-img-top" src="assets/bullying-7902257_1280.png" alt="Card image cap">
          <div class="card-body d-flex flex-column align-items-center justify-content-center">
            <div class="text-center">
              <h3 class="card-title"><small>Le cyberharcèlement, c'est quoi?</small></h3>
            </div>
            <div class="mt-auto">
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
              <a href="#le-cyber-harcelement-c-est-quoi" class="btn btn-primary mt-4">Voir</a>
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
              <a href="#le-cyber-harcelement-c-est-quoi" class="btn btn-primary mt-4">Voir</a>
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
              <a href="#Présentation.html#3018" class="btn btn-primary mt-4">Voir</a>
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
              <div class=" card-content">
                  <div class="content has-text-centered">
                      <h1 class="title is-2 has-text-centered is-info" id="titre">Le cyber-harcèlement c'est quoi?</h1>
                      <p class="subtitle is-4 has-text-centered" id="text">C'est une forme d'agression numérisée mais tout aussi réelle qui se caractérise par une action répétée visant à nuire à une personne ou à un groupe de personnes, via les réseaux sociaux, les applications de messagerie ou les jeux en ligne.</p>
                      <div class="columns">
                        <div class="column is-one-third">
                          <figure class="image">
                            <img class="is-rounded" style="max-width: 200px;" src="./assets/composition-cyber-intimidation.jpg.avif" alt="mains-humaines-pointant-vers-une-personne-fond-bleu">
                          </figure>
                        </div>
                        <div class="column is-one-third">
                          <div id="player">
                            <!-- Your content -->
                            <iframe width="460" height="215" src="https://www.youtube.com/embed/zUW3JyLtYsQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                          </div>
                        </div>
                        <div class="column is-one-third">
                          <figure class="image">
                            <img class="is-rounded" style="max-width: 200px;" src="./assets/concept-cyberintimidation_23-2148595215.jpg.avif" alt="mains-humaines-pointant-vers-une-personne-fond-bleu">
                          </figure>
                        </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="column is-full">
      <div class="card" id="PresBkg">
        <div class="card-content has-text-white">
          <div class="content has-text-centered">
            <h1 class="title is-1 has-text-centered" id="titre">Comment le déceler ?</h1>
              <div class="card">
                <div class="columns mx-5 ">
                  <i class="fa-solid fa-quote-left fa-2xl"></i>
                </div>
                <p class="subtitle is-5" id="text">Il se matérialise sous différentes formes:
                    Messages irrespectueux, violents.
                    Incitation à faire des choses contre sa volonté, comme s'auto-mutiler.
                    Diffusion d'image ou vidéo en ligne contre le consentement de la personne.
                    Usurpation d'identité digitale
                  </p>
              </div>
              <div class="card mt-3">
                <p class="subtitle is-5 mb-5" id="text">
                   Ce sont généralement des actes répétés et intentionnels, mais il peut parfois être difficile de faire la différence avec une plaisanterie. Pour cela, demander des excuses à la personne, si elle n'en présente pas cela signifie que c'est délibéré.
               </p>
               <div class="columns is-flex-direction-row-reverse ">
                 <i class="fa-solid fa-quote-left fa-flip-horizontal fa-2xl"></i>
              </div>
              </div>
               <div class="block mt-6">
                <!-- Your content -->
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/kQhJmErUUlM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                                        </div>
              </div>
          </div>
        </div>
      </div>
    </div>

    <div class="column is-full">
      <div class="card" id="PresBkg">
        <div class="card-content has-text-white">
          <div class="content has-text-centered">
          <h1 class="title is-1 has-text-centered" id="titre">Que faire pour s'en prémunir?</h1>
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
          <div class="block mt-6">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/IGhP53ahZrI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
          </div>
        </div>
      </div>
    </div>

    <div class="column is-full">
          <div class="card" id="PresBkg" >
              <div class="card-content">
                  <div class="content has-text-centered">
                      <h1 class="title is-2 has-text-centered is-info" id="titre">Quelles sont les conséquences</h1>
                      <p class="subtitle is-4 has-text-centered ml-6" id="text">Ces agressions peuvent avoir un impact négatif sur votre santé physique et mentale, affectant à la fois votre bien-être émotionnel et psychologique. Elles peuvent engendrer divers problèmes, comme:</p>
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
                    </div>
              </div>
          </div>
    </div>

    <div class="column is-full">
      <div class="card" id="PresBkg">
        <div class="card-content has-text-white">
          <div class="content has-text-centered">
            <h4 class="title is-4 has-text-white">Selenium Testing</h4>
            <p class="subtitle is-5 has-text-white">View Documentation</p>
            <p>Run Selenium scripts on cloud-based infrastructure.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="column is-full">
      <div class="card" id="PresBkg">
        <div class="card-content has-text-white">
          <div class="content has-text-centered">
            <h4 class="title is-4 has-text-white">Selenium Testing</h4>
            <p class="subtitle is-5 has-text-white">View Documentation</p>
            <p>Run Selenium scripts on cloud-based infrastructure.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="column is-full">
      <div class="card" id="PresBkg">
        <div class="card-content has-text-white">
          <div class="content has-text-centered">
            <h4 class="title is-4 has-text-white">Selenium Testing</h4>
            <p class="subtitle is-5 has-text-white">View Documentation</p>
            <p>Run Selenium scripts on cloud-based infrastructure.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="column is-full">
      <div class="card" id="PresBkg">
        <div class="card-content has-text-white">
          <div class="content has-text-centered">
            <h4 class="title is-4 has-text-white">Selenium Testing</h4>
            <p class="subtitle is-5 has-text-white">View Documentation</p>
            <p>Run Selenium scripts on cloud-based infrastructure.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="column is-full">
      <div class="card" id="PresBkg">
        <div class="card-content has-text-white">
          <div class="content has-text-centered">
            <h4 class="title is-4 has-text-white">Cypress Testing</h4>
            <p class="subtitle is-5 has-text-white">View Documentation</p>
            <p>Run Cypress scripts on cloud-based infrastructure.</p>
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
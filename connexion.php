
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iGP Manager Wiki - Connexion</title>
    <!--FAVICON-->
  <link rel="apple-touch-icon" sizes="57x57" href="../images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../images/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" href="styles/header.css">
<!--END FAVICON-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/loggin.css">
</head>

<body>
  <!--Barre nav avec images-->
  <div class="main">
    <nav id="nav">
      <div class="img"><img src="images/logo.png" style="width:200px; height:50px; margin-top: 0.8em;"></div>
      <div class="toggle">
        <i class="fas fa-bars menu"></i>
      </div>
      <!--Icone de connexion et de déconnexion-->
      <ul class="ul">
        <li class="li"><a href="inscription.php">Inscription</a></li>
          <li class="li"><a href="https://igpmanager.com/forum-index">Forum du jeu</a></li>
          <li class="li"><a href="https://igpmanager.com/">Page d'accueil du jeu</a></li>

      </ul>
    </nav>
  </div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
  integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js"></script>
<script>
  $('document').ready(function () {
    $('.menu').click(function () {
      $('.ul').toggleClass('active');
    })
  })
  window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "black"
    },
    "button": {
      "background": "#f1d600"
    }
  },
  "showLink": false,
  "theme": "edgeless",
  "content": {
    "message": "Ce site utilise des cookies pour vous garantir la meilleure expérience sur notre site.",
    "dismiss": "J'ai compris"
  }
})});
</script>

    <form  method="post" class="form-signin ">
        <div id="logo" class="mb-5 mx-auto text-center">
    <img class="mt-5" src="images/logo.png" width="200px" alt="logo étoile champenoise">
        </div>
        <h1 class="h3 mb-3 text-light text-center font-weight-normal">Connectez vous !</h1>
        <label for="inputEmail" class="sr-only">E-Mail</label>
        <input type="text" name="mail" id="inputUserName" class="form-control" placeholder="Votre mail" required
                autofocus>
        <label for="inputPassword" class="sr-only">Mot de passe</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Votre mot de passe"
            required>
        <div class="checkbox mb-3">
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Se connecter</button>
        <a href="index.php" class="ac">Retour à l'Accueil</a>
        <p class="mt-5 mb-3 text-light text-center">&copy; Wiki iGP Manager 2019</p>
    </form>

<body>

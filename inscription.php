<?php
require_once 'co.php';

if(isset($_POST['forminscription'])) {
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $mail = htmlspecialchars($_POST['mail']);
   $mail2 = htmlspecialchars($_POST['mail2']);
   $mdp = sha1($_POST['mdp']);
   $mdp2 = sha1($_POST['mdp2']);
   if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 255) {
         if($mail == $mail2) {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
                  if($mdp == $mdp2) {
                     $insertmbr = $bdd->prepare("INSERT INTO clients(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
                     $insertmbr->execute(array($pseudo, $mail, $mdp));
                     $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
                  } else {
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse mail n'est pas valide !";
            }
         } else {
            $erreur = "Vos adresses mail ne correspondent pas !";
         }
      } else {
         $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iGP Manager Wiki - Inscription</title>
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
<!--END FAVICON-->


</head>

<body>
   <div align="center">
     <h2>Inscription</h2>
       <br /><br />
    <form  method="POST" action="">
        <table>
          <tr>
            <td align="right">
              <label for="pseudo">Pseudo :</label>
            </td>
            <td>
              <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
            </td>
         </tr>
         <tr>
           <td align="right">
             <label for="mail">Mail :</label>
           </td>
           <td>
             <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
           </td>
        </tr>
        <tr>
          <td align="right">
            <label for="mail2">Confirmation du Mail :</label>
          </td>
          <td>
            <input type="email" placeholder="Confirmez votre email" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
          </td>
       </tr>
       <tr>
         <td align="right">
           <label for="mdp">Mot de passe :</label>
         </td>
         <td>
           <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
         </td>
      </tr>
      <tr>
        <td align="right">
          <label for="mdp2">Confirmation du mot de passe :</label>
        </td>
        <td>
          <input type="password" placeholder="Confirmez votre mot de passe" id="mdp" name="mdp" />
        </td>
     </tr>
     <tr>
       <td></td>
       <td align="center">
         <br />
         <input type="submit" value="je m'inscris" /><br />
         <a href="index.php" class="ac">Retour à l'Accueil</a>
         <p>&copy; Wiki iGP Manager 2019</p>
      </td>
    </tr>
   </table>
    </form>

    <?php if(isset($erreur)){
      echo '<font color="red">' .$erreur."</font>";
    }
    ?>

</body>
</html>

<?php
require_once 'SQL.php';
 ?>
<!DOCTYPE html>
  <html lang="fr" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Crud</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
  </head>

  <body>
    <div class="container">
      <h1> Gestion des Utilisateurs</h1>
</div>
<form action="#" method="get" class="form-inline">
  <input type="hidden" name="action" value="<?= $form_action ?>">
  <input type="hidden" name="id" value="<?= $client->id ?>">
  <input type="text" name="login" class="form-control" placeholder="login" value="<?= $client->login?>">
  <input type="text" name="mdp" class="form-control" placeholder="mdp" value="<?= $client->mdp?>">
  <input type="text" name="type" class="form-control" placeholder="type" value="<?= $client->type?>">
  <button class="btn btn-sucess">
     <?php if($client->id == -1) :?>
     Ajouter
     <?php else : ?>
     Modifier
     <?php endif ?>
  </button>
</form>
<br>
<table class="table table_striped">
  <tr>
    <th>Id</th>
    <th>Login</th>
    <th>Mdp</th>
    <th>Type</th>
  </tr>
  <?php foreach ($clients as $c) :?>
  <tr>
    <td><?= $c->id ?></td>
    <td><?= $c->login ?></td>
    <td><?= $c->mdp ?></td>
    <td><?= $c->type ?></td>
    <td><a href="?action=del&id=<?= $c->id ?>" class="btn btn-danger"></td>
      <span class="glyphicon glyphicon-minus-sign"></span>
  </a></td>
  <td><a href="?action=edit&id=<?= $c->id ?>" class="btn btn-primary"></td>
    <span class="glyphicon glyphicon-edit"></span>
 </a></td>

</tr>



<?php endforeach ?>
</table>

  </body>

  </html>

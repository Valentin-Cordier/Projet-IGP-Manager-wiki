<?php
include 'SQL.php' ;
include 'fonctiontableau.php' ;

$id = $_GET["id"];
if ($id == 0) {
  $user = getNewUser();
  $action = "CREATE";
  $libelle = "creer";
} else {
  $user = readUser($id);
  $action = "UPDATE";
  $libelle = "mettre a jour";
}
  ?>
  <html>
  <header>
    <link href="styles/style.css" rel="stylesheet">
  </header>
  <body>
<form method="post" action="" >
  <div class="input-group">
    <label>Login</label>
    <input type="text" name="id" value="<?php echo $user['id']; ?>">
  </div>
		<div class="input-group">
			<label>Login</label>
			<input type="text" name="login" value="<?php echo $user['login']; ?>">
		</div>
		<div class="input-group">
			<label>Mdp</label>
			<input type="text" name="mdp" value="<?php echo $user['mdp']; ?>">
		</div>
    <div class="input-group">
			<label>Type</label>
			<input type="text" name="type" value="<?php echo $user['type']; ?>">
		</div>
		<div class="input-group">
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
	<button class="btn" type="submit" name="save" >Save</button>
		</div>
	</form>
</body>
</html>

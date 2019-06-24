<?php
	$host_name = 'localhost';
	$database="igp";
	$user_name = 'root';
	$password = '';


	$db = null;
	try {
	  $db = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
	} catch (PDOException $e) {
	  echo "Erreur!: " . $e->getMessage() . "<br/>";
	  die();
	}

	$db->exec("SET CHARACTER SET utf8");

function ajouterClient($login, $mdp, $type){

	global $db;
	$sql = "INSERT INTO clients VALUES(null, ?, ?, ?)";
	$stmt = $db->prepare($sql);
	$stmt->bindVALUE(1, $login, PDO::PARAM_STR);
	$stmt->bindVALUE(2, $mdp, PDO::PARAM_STR);
	$stmt->bindVALUE(3, $type, PDO::PARAM_STR);
	$pass_hache = password_hash($mdp, PASSWORD_BCRYPT);
	return $stmt->execute();
}

function supprimerClient($id){

	global $db;
	$sql = "DELETE FROM clients WHERE id=?";
  $stmt =	$db->prepare($sql);
	$stmt->bindVALUE(1, $id, PDO::PARAM_INT);
	return $stmt->execute();
}

function modifierClient($id, $login, $type ){

	global $db;
	$sql = "UPDATE clients SET login=:login, mdp=:mdp, typee=:type WHERE id=:id";
  $stmt =	$db->prepare($sql);
	$stmt->bindVALUE('id', $id, PDO::PARAM_INT);
	$stmt->bindVALUE('login', $login, PDO::PARAM_STR);
  $stmt->bindVALUE('mdp', $mdp, PDO::PARAM_STR);
	$stmt->bindVALUE('type', $type, PDO::PARAM_STR);
	return $stmt->execute();
}

function getClient($id){
	global $db;
	$sql = "SELECT * FROM clients WHERE id=?";
  $stmt =	$db->prepare($sql);
  $stmt->execute([$id]);
	return $stmt->fetch(PDO::FETCH_OBJ);
}

function getAllClient(){
	global $db;
	$sql = "SELECT * FROM clients";
  $stmt =	$db->prepare($sql);
  $stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_OBJ);
}


?>

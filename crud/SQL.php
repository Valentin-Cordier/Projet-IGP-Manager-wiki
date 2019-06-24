<?php

require_once 'server.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';


$client = (object) ['id' => -1, 'login' => '', 'mdp' => '', 'type' => ''];
$form_action = 'add';

switch ($action) {
  case 'add':
    $login = $_GET['login'];
    $mdp = $_GET['mdp'];
    $type = $_GET['type'];
    ajouterClient($login, $mdp, $type);
    break;
  case 'del':
    $id = $_GET['id'];
    supprimerClient($id);
    break;
  case 'edit':
    $id = $_GET['id'];
    $client = getClient($id);
    $form_action = 'update';
    break;
  case 'update':
  $id = $_GET['id'];
  $login = $_GET['login'];
  $mdp = $_GET['mdp'];
  $type = $_GET['type'];
  modifierClient($id, $login, $mdp, $type);
    break;
}

$clients = getAllClient();
 ?>

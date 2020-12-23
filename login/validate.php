<?php

require '../vendor/autoload.php';

use App\SQLiteConnection;
use App\SQLiteGET;

session_start();

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

$email = $_REQUEST['email'];
$password = md5($_REQUEST['password']);

if($email == null || $password == null) {
  $_SESSION['loginErro'] = "Todos os campos são obrigatórios.";
  header("Location: /login");
} else {

  $pdo = (new SQLiteConnection())->connect();
  $sqlite = new SQLiteGET($pdo);
  // find user
  $user = $sqlite->getUser();
  
  echo "arquivo exite";
}

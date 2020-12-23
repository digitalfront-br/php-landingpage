<?php
session_start();
require '../vendor/autoload.php';

use App\SQLiteConnection;
use App\SQLiteInsert;


$image = new CoffeeCode\Uploader\Image("../assets", "img", false);

$logoName = md5(uniqid(rand(), true)) . '.' . substr($_FILES['file_logo']['name'], strrpos($_FILES['file_logo']['name'], '.') + 1);
$bannerName = md5(uniqid(rand(), true)) . '.' . substr($_FILES['file_banner']['name'], strrpos($_FILES['file_banner']['name'], '.') + 1);

if ($_FILES != null) {
    try {
        $upload1 = $image->upload($_FILES['file_logo'], $logoName);
        $upload2 = $image->upload($_FILES['file_banner'], $bannerName);
    } catch (Exception $e) {
        echo "<p>(!) {$e->getMessage()}</p>";
    }
}

$project = [];
$project['logo'] = $logoName;
$project['banner'] = $bannerName;
$project['bg_color'] = $_REQUEST['bg_color'];
$project['txt_color'] = $_REQUEST['txt_color'];
$project['link'] = $_REQUEST['link'];
$project['cupom'] = $_REQUEST['cupom'];
$project['ads'] = $_REQUEST['ads'];
$project['file_logo'] = $logoName;
$project['file_banner'] = $bannerName;
$project['user_id'] = $createUser;
$email = $_REQUEST['email'];
$password = md5($_REQUEST['password']);

$pdo = (new SQLiteConnection())->connect();
$sqlite = new SQLiteInsert($pdo);

//create user
if (!$_SESSION['userActive']) {
    $createUser     =  $sqlite->createUser($email, $password);
    $createProject  =  $sqlite->createProject($project);
    $_SESSION['userActive'] = true;
    header("Location: /");
}
if ($_SESSION['userActive']) {
echo "user active é verdadeiro";
}
//   echo "<pre>";
// echo print_r($project);
// echo "</pre>";



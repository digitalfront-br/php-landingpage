<?php
session_start();
require '../vendor/autoload.php';

use App\Config;
use App\SQLiteConnection as SQLiteConnection;
use App\SQLiteCreateTable as SQLiteCreateTable;
use App\SQLiteGET;

if(isset($_SESSION['userActive']) && !is_file(Config::_DB)) {
    $sqlite = new SQLiteCreateTable((new SQLiteConnection())->connect());
    // create new tables
    $createTable = $sqlite->createTables();
    // header("Location: /config");
    include 'page.php';
} 
if(!isset($_SESSION['userActive']) && is_file(Config::_DB)) {
    $sqlite = new SQLiteGET((new SQLiteConnection())->connect());
    $data = $sqlite->getProject();
    $user = $sqlite->getUser();
    header("Location: /login");
}
if(isset($_SESSION['userActive']) && is_file(Config::_DB)) {
    $sqlite = new SQLiteGET((new SQLiteConnection())->connect());
    $data = $sqlite->getProject();
    $user = $sqlite->getUser();
}
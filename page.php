<?php

use App\SQLiteConnection;
use App\SQLiteCreateTable;
use App\SQLiteGET;
$sqlite = new SQLiteGET((new SQLiteConnection())->connectRoot());
$data = $sqlite->getProject();

include 'includes/header.php'; 

 ?>
 <style>
   body {
     background-color: <?= $data->bg_color ?>;
   }
 </style>
<h1>pagina home</h1>
<?php include 'includes/footer.php'; ?>
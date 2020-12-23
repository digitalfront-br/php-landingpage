<?php 

require 'vendor/autoload.php';

use App\Config;

if (is_file(Config::_DB_ROOT))
  require_once('page.php');
else
  header("Location: /config");
exit();
?>
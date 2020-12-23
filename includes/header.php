<?php 
session_start();

print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.5/dist/css/uikit.min.css" />
  <link rel="stylesheet" href="includes/style.css">
  <style>
    body {
      background-color: <?= $data->bg_color ?>;
    }
  </style>
  <title>DigitalFront</title>
</head>

<body>
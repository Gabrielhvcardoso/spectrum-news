<?php

require_once('../constants.php');
require_once('../loader.php');
require_once('../functions.php');

use Controllers\AdminController;

if (!isset($_SESSION)) session_start();

// Login/Logout

if (isset($_GET["logout"])) {
  header("Location: ./index");
  echo "logout";
  session_destroy();
} else if (!empty($_POST["login"]) && !empty($_POST["password"])) {
  $login = $_POST["login"];
  $password = $_POST["password"];

  AdminController::authorize($login, $password);

  if (!empty($_SESSION['id'])) $_POST = [];
}

// Authorized

$authorized = !empty($_SESSION['id']);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <base href="http://localhost/spectrum/" />

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spectrum Administration</title>

  <link rel="stylesheet" href="./static/styles/base.css" />

  <?php
    if ($authorized) {
      echo '<link rel="stylesheet" href="./admin/static/styles/admin.css" />';
    } else {
      echo '<link rel="stylesheet" href="./admin/static/styles/login.css" />';
    }
  ?>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Cabin:wght@400;500;600&family=Spinnaker&display=swap&family=Merriweather:wght@300&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="./admin/richtexteditor/rte_theme_default.css" />
  <script type="text/javascript" src="./admin/richtexteditor/rte.js"></script>
  <script type="text/javascript" src='./admin/richtexteditor/plugins/all_plugins.js'></script>
</head>
<body>
  <?php
    if ($authorized) {
      include('./Views/components/header.php');
      include('./Views/admin.php');
    } else {
      include('./Views/login.php');
    }
  ?>
</body>
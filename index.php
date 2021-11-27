<?php
  require_once('./constants.php');
  require_once('./loader.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <base href="http://localhost/spectrum/" />

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spectrum | Your daily news</title>

  <link rel="stylesheet" href="./static/styles/article.css" />
  <link rel="stylesheet" href="./static/styles/base.css" />
  <link rel="stylesheet" href="./static/styles/footer.css" />
  <link rel="stylesheet" href="./static/styles/home.css" />
  <link rel="stylesheet" href="./static/styles/header.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Cabin:wght@400;500;600&family=Spinnaker&display=swap&family=Merriweather:wght@300&display=swap" rel="stylesheet">
</head>
<body>
  <?php include('./Views/Components/header.php'); ?>
  <?php include('./router.php'); ?>  
  <?php include('./Views/Components/footer.php'); ?>
</body>
</html>
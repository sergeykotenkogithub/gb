<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> <?=$title?></title>
    <link rel="stylesheet" type="text/css" href="assets/style/style.css?<?php echo uniqid();?>" />
  </head>
  <body>
    <div class="wrapper">

      <?=$header?>

      <?=$pageTitle?>

      <?=$price?>

      <?=$comments?>

      <?=$footer?>

    </div>

    <script src="assets/js/script.js?<?php echo uniqid();?>"></script>
  </body>
</html>

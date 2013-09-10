<!DOCTYPE html>
<html lang="fr-FR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Gallerie de Mathys</title>
  <link rel="shortcut icon" href="<?php echo THEMEPATH; ?>/images/favicon.png" />

  <link rel="stylesheet" type="text/css" href="<?php echo THEMEPATH; ?>/rebase-min.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo THEMEPATH; ?>/style.css" />
  <?php echo $gallery->getColorboxStyles(1); ?>

  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <?php echo $gallery->getColorboxScripts(); ?>

  <?php file_exists('googleAnalytics.inc') ? include('googleAnalytics.inc') : false; ?>

  <!-- Site styles -->
  <link href="../css/style.css" rel="stylesheet" />

</head>

<body>
  <div class="content gallery mathys">

    <h1>Mathys</h1>

    <?php
        $galleryArray['relText'] = 'colorbox';
        echo $gallery->readTemplate('templates/defaultGallery.php', $galleryArray);
    ?>

  </div>

  <!-- Footer -->
  <div class="footer">
    ©2013 J. Buget, tous droits réservés
  </div>

</body>

</html>

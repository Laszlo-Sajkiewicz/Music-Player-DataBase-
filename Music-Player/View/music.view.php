<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="View/music.view.css" media="screen" charset="utf-8">
    <title>Music</title>
  </head>
  <body>
    <h1>Music player</h1><h2>Audio player</h2>
<hr/>
<p> Mosaic of music</p>
<hr/>
    <?php

      foreach ($data['musicList'] as $key => $value) {
        var_dump($value);
    ?>
    <a href="Data/<?= $value->getCover() ?>">
      <img src="Data/<?= $value->getCover() ?>" alt="Nom image" />
    </a>
    <?php
      }
    ?>

    <footer>
      <p>Posted by: Laszlo Sajkiewicz</p>
      <p>
        Contact information:
        <a href="mailto:laszlo.sajkiewicz@gmail.com">contact me</a>
      </p>
    </footer>
  </body>
</html>

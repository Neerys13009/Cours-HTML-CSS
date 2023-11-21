<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Plusieurs Pages</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <nav>
        <a href="index.php">
          <img
            src="images/632px-Karmine_Corp_lightmode.png"
            alt="acceuilkcorp"
            width="60"
            height="30"
        /></a>
        <ul>
          <li><a href="histoireKcorp.php">Histoire Kcorp</a></li>
          <li><a href="esportKcorp.php">Esport</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <?php echo $content; ?>
    </main>
    <footer>&#169; KC Marseille</footer>
  </body>
</html>

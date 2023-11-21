<?php ob_start(); ?> // Démarre la mémoire tampon de sortie

<h1>Page d'acceuil</h1>
<!-- TOUT LE CONTENU HTML ICI -->

<?php
$content=ob_get_clean();  // Récupère le contenu mis en mémoire tampon
require_once "template.php"; // Inclut le fichier template.php
?>

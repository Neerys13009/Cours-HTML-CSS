<?php ob_start(); ?>

<h1>Page Histoire Kcorp</h1>
<!-- TOUT LE CONTENU HTML ICI -->

<?php
$content=ob_get_clean(); 
require_once "template.php";
?>
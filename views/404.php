<?php
// This page is called if the user call a wrong page by URL
ob_start(); ?>

    <h2><em>Veuillez utiliser le menu</em></h2>

<?php
$content = ob_get_clean();
require "views/template.php";
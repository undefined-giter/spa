<?php
// 'session_start()' start or keep open a session.
ob_start();
session_start();
?>

<form id="connectFieldset" action="./controllers/sessionMethod.php" method="POST">
    <fieldset>
        <legend>Privé</legend>
        <?php if(!empty($_SESSION['errorMessage'])): ?>
            <?= $_SESSION['errorMessage'] ?>
        <?php endif ?>
        <div class="connect">
            <label for="login" class="connectLabel">Identifiant</label>
            <input id="login" class="connectInput" type="text" name="login" value="" />
        </div>
        <div class="connect">
            <label for="password" class="connectLabel">Mot de passe</label>
            <input id="password" class="connectInput" type="password" name="password" value="" />
        </div>
        <div class="connect">
            <button type="submit" name="submit">Se connecter</button>
        </div>
    </fieldset>
</form>

<?php
$content = ob_get_clean();
require "template.php";
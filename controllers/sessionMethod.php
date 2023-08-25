<?php
require "../models/sessionManager.php";

$y = new sessionManager;
$member = $y->member();

session_start();

if(!empty($_POST)):
    if(!empty($_POST['login']) && !empty($_POST['password'])):
        if($_POST['login'] !== $member[0]):
            $_SESSION['errorMessage'] = 'Cet identifiant n\'existe pas';
            header('Location: https://www.spa.leorip.com/Connexion');
        elseif(md5($_POST['password']) !== $member[1]):
            $_SESSION['errorMessage'] = 'Mot de passe erroné';
            header('Location: https://www.spa.leorip.com/Connexion');
        else:
            $_SESSION['role'] = 'staff';
            header('Location: https://www.spa.leorip.com/Tous_nos_animaux');
        endif;
    else:
        $_SESSION['errorMessage'] = 'Veuillez renseigner ces champs';
        header('Location: https://www.spa.leorip.com/Connexion');
    endif;
    if($_POST['login'] === 'destroy' && $_POST['password'] === 'destroy'):
        session_destroy();
        header('Location: https://www.spa.leorip.com/Connexion');
    endif;
endif;

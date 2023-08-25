<?php
require_once "../models/PetManager.php";

// htmlspecialchars() to protect re-inject code by input -lang fr-. int is used for nb - XSS error
$formName = ucwords(htmlspecialchars($_POST['name']));
$formKind = htmlspecialchars($_POST['kind']);
$formBreed = htmlspecialchars($_POST['breed']);
$formAge = (int)$_POST['age'];
$formAgeUnitMeasure = (int)$_POST['ageUnitMeasure'];
$formDescription = htmlspecialchars($_POST['description']);
$formPicturePath = htmlspecialchars($_POST['picturePath']);
$formFileExtension = (int)($_POST['fileExtension']);
$formPicDescribed = htmlspecialchars($_POST['picDescribed']);
$formSex = (int)$_POST['sex'];
$formAvailable = (int)$_POST['available'];
$formReason = htmlspecialchars($_POST['reason']);

$y = new PetManager();
$y->addPetDb($formName, $formKind, $formBreed, $formAge, $formAgeUnitMeasure, $formDescription,
    $formPicturePath, $formFileExtension, $formPicDescribed, $formSex, $formAvailable, $formReason);

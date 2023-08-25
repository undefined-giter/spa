<?php
session_start();
require_once "../models/PetManager.php";

$petId = (int)$_POST['petId'];
$newName = ucwords(htmlspecialchars($_POST['newName']));
$newAge = (int)$_POST['newAge'];
$newAgeUnitMeasure = (int)$_POST['newAgeUnitMeasure'];
$newSex = (int)$_POST['newSex'];

$newStatus = (int)$_POST['newStatus'];  // available / soon available / not available
$newOutDate = htmlspecialchars($_POST['newOutDate']);  // This "new" is here to tie with other var but isn't a true 'new' data
$newReason = htmlspecialchars($_POST['newReason']);

$y = new PetManager();
$y->editPet($petId, $newName, $newAge, $newAgeUnitMeasure, $newSex, $newStatus, $newOutDate, $newReason);
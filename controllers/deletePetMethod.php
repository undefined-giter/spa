<?php
require_once "models/PetManager.php";

$currentPet = (int)$_POST['retrievesPetId'];

$y = New PetManager();
$y->deletePet($currentPet);

require "views/home.php";
<?php
require_once "controllers/PetController.php";
require_once "controllers/StructureController.php";
// require_once "controllers/CustomerController.php";
$structureController = new StructureController;
$petController = new PetController;
// $customerController = new CustomerController;

// In 'index.php' remains only the routes
if(empty($_GET['page'])){
    $structureController->home();
} else {
    switch($_GET['page']){
        case "Accueil" :
            $structureController->home();
            break;
        case "Présentation" :
            $structureController->introduce();
            break;
        case "Tous_nos_animaux" :
            $petController->showPets();
            break;
        case "Chiens" :
            $petController->showDogs();
            break;
        case "Chats" :
            $petController->showCats();
            break;
        case "Octodons" :
            $petController->showDegus();
            break;
        case "Supprimer_un_animal" :
            $petController->deleteCurrentPet();
            break;
        case "Ajouter_un_animal" :
            $petController->addPet();
            break;
        case "Contact" :
            $structureController->contact();
            break;
        case "Connexion" :
            $structureController->connect();
            break;
        default :
            $structureController->noPageFound();
    }
}
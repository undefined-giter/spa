<?php
// Used to not show 'notice' in the views of the page
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
require_once "models/PetManager.php";
require_once "models/Pet.php";

class PetController
{
    private $petManager;

    public function __construct()
    {
        // When 'PetsController' is called, it automatically instantiate 'PetManager', which allow to use methods of the Class
        $this->petManager = new PetManager();

        $this->petManager->fetchAnimals();
        $this->petManager->fetchDogs();
        $this->petManager->fetchCats();
        $this->petManager->fetchDegus();

        $_SESSION['formName'] = "\"Nommez-moi\"";
    }

    public function showPets()
    {
        $_SESSION['pageName'] = "Tous nos animaux <i class='fas fa-paw'></i>";

        // Here is defined '$pets' which is affiliate to the array of pets from 'PetManager' Class
        $pets = $this->petManager->getPets();

        // Were the views file is finally called (instead of 'index.php')
        require "views/pets.php";
    }

    public function showDogs()
    {
        $_SESSION['pageName'] = 'Nos braves chiens';

        $pets = $this->petManager->getDogs();

        require "views/pets.php";
    }

    public function showCats()
    {
        $_SESSION['pageName'] = 'Le royaume des chats';

        $pets = $this->petManager->getCats();

        require "views/pets.php";
    }

    public function showDegus()
    {
        $_SESSION['pageName'] = 'Nos petits rongeurs';

        $pets = $this->petManager->getDegus();

        require "views/pets.php";
    }

    public function deleteCurrentPet()
    {
        if(isset($_SESSION['role']) == 'staff'){
            require "controllers/deletePetMethod.php";
        }
    }

    // The function to add a pet in database is addPetDb(), a method of 'PetManager' Class
    // Here's just a redirect to respect the MVC
    public function addPet()
    {
        $_SESSION['pageName'] = 'Ajouter un nouvel ami';

        if(isset($_SESSION['role']) == 'staff') {
            require "views/formAddPet.php";
        }
    }
}
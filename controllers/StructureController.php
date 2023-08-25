<?php

Class StructureController{

    // public function __construct(){}

    public function home(){
        require_once "models/PetManager.php";

        $_SESSION['pageName'] = 'Accueil';

        setlocale(LC_TIME, "French");
        $date = utf8_encode(strftime("%A %d %B %Y"));

        $homeCount = new PetManager;

        $dogCount = $homeCount->countOfDogs();
        $catCount = $homeCount->countOfCats();
        $degusCount = $homeCount->countOfDegus();
        $petsCount = $homeCount->countOfPets();

        require "views/home.php";
    }

    public function introduce(){

        $_SESSION['pageName'] = 'Qui sommes-nous ?';

        require "views/introduce.php";
    }

    public function contact(){
        require_once "models/CustomerManager.php";

        $_SESSION['pageName'] = 'Nous contacter';

        $customerObj = new CustomerManager;
        $customerObj->fetchCustomers();

        require "views/contact.php";
    }

    public function connect(){

        $_SESSION['pageName'] = 'Connectez-vous';

        require "views/connect.php";
    }

    public function noPageFound(){

        $_SESSION['pageName'] = "Cette page n'existe pas <i class='fas fa-bone'></i>";

        require "views/404.php";
    }
}

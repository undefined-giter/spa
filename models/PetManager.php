<?php
session_start();
require_once "Model.php";
require_once "Pet.php";

class PetManager extends Model
{
    private $pets;
    private $dogs;
    private $cats;
    private $degus;

    // public function __construct(){}

    public function fetchAnimals(): void
    {
        $req = $this->getDb()->prepare("
        SELECT animals.id, name, kind, breed, age, ageUnitMeasure, description,
               picturePath, fileExtension, picDescribed, sex, available
                /*, availability.inDate, availability.outDate, availability.fk_key */
        FROM animals
        INNER JOIN availability
        ON animals.id = availability.fk_key
        ORDER BY inDate");

        $req->execute();

        $pets = $req->fetchAll(PDO::FETCH_ASSOC);
        foreach ($pets as $pet) {
            $p = new Pet($pet['id'], $pet['name'], $pet['kind'], $pet['available'],
                $pet['breed'], $pet['age'], $pet['ageUnitMeasure'],
                $pet['description'], $pet['sex'], $pet['picturePath'],
                $pet['fileExtension'], $pet['picDescribed']);
            $this->addPet($p);
        }
    }

    public function addPet(Pet $p): void
    {
        $this->pets[] = $p;
    }

    public function getPets(): ?array
    {
        return $this->pets;
    }



    public function fetchDogs(): void
    {
        $req = $this->getDb()->prepare("
        SELECT animals.id, name, kind, breed, age, ageUnitMeasure, description,
               picturePath, fileExtension, picDescribed, sex, availability.available
        FROM animals
        INNER JOIN availability
        ON animals.id = availability.fk_key
        WHERE kind = 0
        ORDER BY inDate");

        $req->execute();

        $dogs = $req->fetchAll(PDO::FETCH_ASSOC);
        foreach ($dogs as $dog){
            $d = new Pet($dog['id'], $dog['name'], $dog['kind'], $dog['available'],
                $dog['breed'], $dog['age'], $dog['ageUnitMeasure'],
                $dog['description'], $dog['sex'], $dog['picturePath'],
                $dog['fileExtension'], $dog['picDescribed']);
            $this->addDog($d);
        }
    }

    public function addDog(Pet $d): void
    {
        $this->dogs[] = $d;
    }

    public function getDogs(): ?array
    {
        return $this->dogs;
    }



    public function fetchCats(): void
    {
        $req = $this->getDb()->prepare("
        SELECT animals.id, name, kind, breed, age, ageUnitMeasure, description,
               picturePath, fileExtension, picDescribed, sex, availability.available
        FROM animals
        INNER JOIN availability
        ON animals.id = availability.fk_key
        WHERE kind = 1
        ORDER BY id");

        $req->execute();

        $cats = $req->fetchAll(PDO::FETCH_ASSOC);
        foreach ($cats as $cat){
            $c = new Pet($cat['id'], $cat['name'], $cat['kind'], $cat['available'],
                $cat['breed'], $cat['age'], $cat['ageUnitMeasure'],
                $cat['description'], $cat['sex'], $cat['picturePath'],
                $cat['fileExtension'], $cat['picDescribed']);
            $this->addCat($c);
        }
    }

    public function addCat(Pet $c): void
    {
        $this->cats[] = $c;
    }

    public function getCats(): ?array
    {
        return $this->cats;
    }



    public function fetchDegus(): void
    {
        $req = $this->getDb()->prepare("
        SELECT animals.id, name, kind, breed, age, ageUnitMeasure, description,
               picturePath, fileExtension, picDescribed, sex, availability.available
        FROM animals
        INNER JOIN availability
        ON animals.id = availability.fk_key
        WHERE kind = 2
        ORDER BY inDate");

        $req->execute();

        $octodons = $req->fetchAll(PDO::FETCH_ASSOC);
        foreach ($octodons as $octodon){
            $degusR = new Pet($octodon['id'], $octodon['name'], $octodon['kind'], $octodon['available'],
                $octodon['breed'], $octodon['age'], $octodon['ageUnitMeasure'],
                $octodon['description'], $octodon['sex'], $octodon['picturePath'],
                $octodon['fileExtension'], $octodon['picDescribed']);
            $this->addDegus($degusR);
        }
    }

    public function addDegus(Pet $degusRodent): void
    {
        $this->degus[] = $degusRodent;
    }

    public function getDegus(): ?array
    {
        return $this->degus;
    }



    public function addPetDb(?string $formName, int $formKind, string $formBreed, int $formAge, int $formAgeUnitMeasure,
                             ?string $formDescription, ?string $formPicturePath, int $formFileExtension,
                             ?string $formPicDescribed, int $formSex, int $formAvailable, ?string $formReason): void
    {
        $req = 'INSERT INTO animals (name, kind, breed, age, ageUnitMeasure, description,
                                     picturePath, fileExtension, picDescribed, sex)
        values (:name, :kind, :breed, :age, :ageUnitMeasure, :description, 
                :picturePath, :fileExtension, :picDescribed, :sex)';
        $x = $this->getDb()->prepare($req);
        // bindValue() a secured function of php for user input
        $x->bindValue(":name", $formName, PDO::PARAM_STR);
        $x->bindValue(":kind", $formKind, PDO::PARAM_INT);
        $x->bindValue(":breed", $formBreed, PDO::PARAM_STR);
        $x->bindValue(":age", $formAge, PDO::PARAM_INT);
        $x->bindValue(":ageUnitMeasure", $formAgeUnitMeasure, PDO::PARAM_INT);
        $x->bindValue(":description", $formDescription, PDO::PARAM_STR);
        $x->bindValue(":picturePath", $formPicturePath, PDO::PARAM_STR);
        $x->bindValue(":fileExtension", $formFileExtension, PDO::PARAM_INT);
        $x->bindValue(":picDescribed", $formPicDescribed, PDO::PARAM_STR);
        $x->bindValue(":sex", $formSex, PDO::PARAM_INT);

        $x->execute();

        $animals_id = $this->getDb()->lastInsertId();

        $req = 'INSERT INTO availability (available, reason, fk_key)
        values (:available, :reason, :fk_key)';
        $x = $this->getDb()->prepare($req);

        $x->bindValue(":available", $formAvailable, PDO::PARAM_INT);
        $x->bindValue(":reason", $formReason, PDO::PARAM_STR);
        // foreign_key is constrain to match with the animals.id
        $x->bindValue(":fk_key", $animals_id, PDO::PARAM_INT);
        $x->execute();

        header('Location: https://spa.leorip.com/Tous_nos_animaux');
        // header('Location: ../Tous_nos_animaux');
        // exit();
    }



    public function editPet(int $petId, ?string $newName, int $newAge, int $newAgeUnitMeasure, int $newSex, int $newStatus, ?string $newOutDate, ?string $newReason): void
    {
        $req = 'UPDATE animals
                SET name = :newName, age = :newAge, ageUnitMeasure = :newAgeUnitMeasure, sex = :newSex
                WHERE id = :petId
                    AND id != 12 AND id != 15 AND id != 40 AND id != 41 AND id != 46 AND id != 55 AND id != 57 
                    AND id != 59 AND id != 60 AND id != 70 AND id != 71 AND id != 72 AND id != 73 AND id != 74 AND id != 75';
        $x = $this->getDb()->prepare($req);

        $x->bindValue(":newName", $newName, PDO::PARAM_STR);
        $x->bindValue(":newAge", $newAge, PDO::PARAM_INT);
        $x->bindValue(":newAgeUnitMeasure", $newAgeUnitMeasure, PDO::PARAM_INT);
        $x->bindValue(":newSex", $newSex, PDO::PARAM_INT);
        $x->bindValue(":petId", $petId, PDO::PARAM_INT);
        $x->execute();

        $req = 'UPDATE availability
                SET available = :newStatus, outDate = :newOutDate, reason = :newReason
                WHERE fk_key = :petId';
        $x = $this->getDb()->prepare($req);

        $x->bindValue(":newStatus", $newStatus, PDO::PARAM_INT);
        $x->bindValue(":newOutDate", $newOutDate, PDO::PARAM_STR);
        $x->bindValue(":newReason", $newReason, PDO::PARAM_STR);
        $x->bindValue(":petId", $petId, PDO::PARAM_INT);
        $x->execute();

        header('Location: https://spa.leorip.com/Tous_nos_animaux');
    }



    public function deletePet(int $currentPet): void
    {
        $req = 'DELETE
                FROM animals
                WHERE id = :retrievesPetId 
                    AND id != 12 AND id != 15 AND id != 40 AND id != 41 AND id != 46 AND id != 55 AND id != 57
                    AND id != 59 AND id != 60 AND id != 70 AND id != 71 AND id != 72 AND id != 73 AND id != 74 AND id != 75';
        $x = $this->getDb()->prepare($req);
        $x->bindValue(":retrievesPetId", $currentPet, PDO::PARAM_INT);
        $x->execute();

        header('Location: https://spa.leorip.com/Tous_nos_animaux');
    }



    public function countOfPets(): ?int
    {
        $req_Str = 'SELECT id
                FROM animals';
        $req = $this->getDb()->prepare($req_Str);
        $req->execute();
        $petsArray = $req->fetchAll(PDO::FETCH_ASSOC);

        return count($petsArray);
    }

    public function countOfDogs(): ?int
    {
        $req_Str = 'SELECT id
                FROM animals
                WHERE kind = 0';
        $req = $this->getDb()->prepare($req_Str);
        $req->execute();
        $dogsArray = $req->fetchAll(PDO::FETCH_ASSOC);

        return count($dogsArray);
    }

    public function countOfCats(): ?int
    {
        $req_Str = 'SELECT id
                FROM animals
                WHERE kind = 1';
        $req = $this->getDb()->prepare($req_Str);
        $req->execute();
        $catsArray = $req->fetchAll(PDO::FETCH_ASSOC);

        return count($catsArray);
    }

    public function countOfDegus(): ?int
    {
        $req_Str = 'SELECT id
                FROM animals
                WHERE kind = 2';
        $req = $this->getDb()->prepare($req_Str);
        $req->execute();
        $degusArray = $req->fetchAll(PDO::FETCH_ASSOC);

        return count($degusArray);
    }
}
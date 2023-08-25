<?php
// Pet Class will be instantiated for all kind of pet in 'PetManager.php'
class Pet
{
    private $id;
    private $name;
    private $kind;
    private $status;
    private $breed;
    private $age;
    private $ageUnitMeasure;
    private $description;
    private $sex;
    private $picture;
    private $fileExtension;
    private $picDescribed;

    public function __construct(int $id, ?string $name, int $kind, int $status, string $breed, int $age, int $ageUnitMeasure,
                                ?string $description, int $sex, ?string $picture, int $fileExtension, ?string $picDescribed){
        $this->id = $id;
        $this->name = $name;
        $this->kind = $kind;
        $this->status = $status;
        $this->breed = $breed;
        $this->age = $age;
        $this->ageUnitMeasure = $ageUnitMeasure;
        $this->description = $description;
        $this->sex = $sex;
        $this->picture = $picture;
        $this->fileExtension = $fileExtension;
        $this->picDescribed = $picDescribed;
    }

    public function getId(): int{
        return $this->id;
    }
    public function setId(int $id): void{
        $this->id = $id;
    }

    public function getName(): ?string{
        return $this->name;
    }
    public function setName(?string $name): void{
        $this->name = $name;
    }

    public function getKind(): int{
        return $this->kind;
    }
    public function setKind(int $kind): void{
        $this->status = $kind;
    }

    public function getStatus(): int{
        return $this->status;
    }
    public function setStatus(int $status): void{
        $this->status = $status;
    }

    public function getBreed(): string{
        return $this->breed;
    }
    public function setBreed(string $breed): void{
        $this->breed = $breed;
    }

    public function getAge(): int{
        return $this->age;
    }
    public function setAge(int $age): void{
        $this->age = $age;
    }

    public function getAgeUnitMeasure(): int{
        return $this->ageUnitMeasure;
    }
    public function setAgeUnitMeasure(int $ageUnitMeasure): void{
        $this->ageUnitMeasure = $ageUnitMeasure;
    }

    public function getDescription(): ?string{
        return $this->description;
    }
    public function setDescription(?string $description): void{
        $this->description = $description;
    }

    public function getSex(): int{
        return $this->sex;
    }
    public function setSex(int $sex): void{
        $this->sex = $sex;
    }

    public function getPicture(): ?string{
        return $this->picture;
    }
    public function setPicture(?string $picture): void{
        $this->picture = $picture;
    }

    public function getFileExtension(): int{
        return $this->fileExtension;
    }
    public function setFileExtension(int $fileExtension): void{
        $this->fileExtension = $fileExtension;
    }

    public function getPicDescribed(): ?string{
        return $this->picDescribed;
    }
    public function setPicDescribed(?string $picDescribed): void{
        $this->picDescribed = $picDescribed;
    }
}
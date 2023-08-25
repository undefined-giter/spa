<?php

require_once "Model.php";

class Customer
{
    private $id;
    private $firstName;
    private $lastName;
    private $phone;
    private $mail;
    private $message;

    public function __construct(int $id, string $firstName, string $lastName, int $phone, ?string $mail = null, ?string $message = null){
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phone = $phone;
        $this->mail = $mail;
        $this->message = $message;
    }

    public function getId(): int{
        return $this->id;
    }
    public function setId(int $id): void{
        $this->id = $id;
    }

    public function getFirstName(): string{
        return $this->firstName;
    }
    public function setFirstName(string $firstName): void{
        $this->firstName = $firstName;
    }

    public function getLastName(): string{
        return $this->lastName;
    }
    public function setLastName(string $lastName): void{
        $this->lastName = $lastName;
    }

    public function getPhone(): int{
        return $this->phone;
    }
    public function setPhone(int $phone): void{
        $this->phone = $phone;
    }

    public function getMail(): ?string{
        return $this->mail;
    }
    public function setMail(?string $mail): void{
        $this->mail = $mail;
    }

    public function getMessage(): ?string{
        return $this->message;
    }
    public function setMessage(?string $message): void{
        $this->message = $message;
    }
}
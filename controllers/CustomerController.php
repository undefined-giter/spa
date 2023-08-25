<?php
require_once "models/CustomerManager.php";

class CustomerController
{
    private $customerManager;

    public function __construct()
    {
        $this->customerManager = new customerManager();

        $this->customerManager->fetchCustomers();
    }

    public function showCustomers(){
        return $this->customerManager->getCustomersArray();
    }
}
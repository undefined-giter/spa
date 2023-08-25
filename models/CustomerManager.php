<?php
require_once "Model.php";
require_once "Customer.php";

class customerManager extends Model
{
    private $customers;

    public function __construct()
    {
        $this->customers = array();
    }

    public function addCustomerDb(string $customerFirstName, string $customerLastName, int $customerPhone, ?string $customerMail, ?string $customerMessage): void
    {
        $req = ('INSERT INTO customers (firstName, lastName, phone, mail, message)
        values (:firstName, :lastName, :phone, :mail, :message)');

        $x = $this->getDb()->prepare($req);
        $x->bindValue(":firstName", $customerFirstName, PDO::PARAM_STR);
        $x->bindValue(":lastName", $customerLastName, PDO::PARAM_STR);
        $x->bindValue(":phone", $customerPhone, PDO::PARAM_INT);
        $x->bindValue(":mail", $customerMail, PDO::PARAM_STR);
        $x->bindValue(":message", $customerMessage, PDO::PARAM_STR);

        $x->execute();

        header('Location: https://spa.leorip.com/Contact');
    }

    public function fetchCustomers(): void
    {
        $req = $this->getDb()->prepare('SELECT id, firstName, lastName, phone, mail, message
        FROM customers
        ORDER BY id DESC');

        $req->execute();
        $customers = $req->fetchAll(PDO::FETCH_ASSOC);
        foreach($customers as $customer){
            $c = new Customer($customer['id'], $customer['firstName'], $customer['lastName'], $customer['phone'], $customer['mail'], $customer['message']);
            $this->addCustomerToArray($c);
        }
    }

    public function addCustomerToArray(Customer $customer): void
    {
        $this->customers[] = $customer;
    }

    public function getCustomersArray(): ?array
    {
        return $this->customers;
    }

    public function deleteCustomer(int $customerId, string $customerFirstName, string $customerLastName): void
    {
        $req = 'DELETE
                FROM customers
                WHERE id = :customerId AND firstName = :firstName AND lastName = :lastName
                    AND id != 6 AND id != 8';
        $x = $this->getDb()->prepare($req);
        $x->bindValue(":customerId", $customerId, PDO::PARAM_INT);
        $x->bindValue(":firstName", $customerFirstName, PDO::PARAM_STR);
        $x->bindValue(":lastName", $customerLastName, PDO::PARAM_STR);

        $x->execute();

        header('Location: https://spa.leorip.com/Contact');
    }
}
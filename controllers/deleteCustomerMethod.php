<?php
require_once "../models/CustomerManager.php";

$customerId = (int)$_POST['customerId'];
$choseFirstName = ucwords(htmlspecialchars($_POST['customerFirstName']));
$choseLastName = ucwords(htmlspecialchars($_POST['customerLastName']));

$y = new CustomerManager();
$y->deleteCustomer($customerId, $choseFirstName, $choseLastName);
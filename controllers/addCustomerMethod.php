<?php
require_once "../models/CustomerManager.php";

$customerFirstName = ucwords(htmlspecialchars($_POST['customerFirstName']));
$customerLastName = ucwords(htmlspecialchars($_POST['customerLastName']));
$customerPhone = (int)$_POST['customerPhone'];
$customerMail = htmlspecialchars($_POST['customerMail']);
$customerMessage = htmlspecialchars($_POST['customerMessage']);

$y = new CustomerManager();
$y->addCustomerDb($customerFirstName, $customerLastName, $customerPhone, $customerMail, $customerMessage);
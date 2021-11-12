<?php

if (isset($_POST["register"])) {
    // Personal Details
    $firstName = $_POST["name"];
    $lastName = $_POST["surname"];
    $telephone = $_POST["telephone"];
    
    // Address
    $street = $_POST["street"];
    $house = $_POST["houseNo"];
    $postCode = $_POST["postCode"];
    $town = $_POST["town"];
    
    // Account Details
    $eID = $_POST["eID"];
    $password = $_POST["password"];
    $confirmation = $_POST["confirmPassword"];

    include_once "../includes/autoloader.inc.php";
    
    $registerController = new UsersController($firstName, $lastName, $telephone, $street, $house, $postCode, $town, $eID, $password, $confirmation, "fabian");
    $registerController->register();
    
    header("Location: ../pages/index.php");
}

<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once '../config/database.php';
    include_once '../class/employees.php';
    
    
    $nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    $designation = filter_input(INPUT_POST, "designation",  FILTER_SANITIZE_SPECIAL_CHARS);

    $database = new Database();
    $db = $database->getConnection();

    $item = new Employee($db);

    $item->name = $nom;
    $item->email = $email;
    $item->age = $age;
    $item->designation = $designation;
    $item->created = date('Y-m-d H:i:s');
    
    if($item->createEmployee()){
        echo 'Employee created successfully.';
        header('location: ../listeEmployes.php');
    } else{
        echo 'Employee could not be created.';
    }
?>
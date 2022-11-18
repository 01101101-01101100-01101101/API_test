<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
    include_once '../config/database.php';
    include_once '../class/employees.php';
    
    $database = new Database();
    $db = $database->getConnection();
    
    $item = new Employee($db);
    
    //$data = json_decode(file_get_contents("php://input"));
    
    $id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
    $designation = filter_input(INPUT_POST, "designation", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $item->id = $id;
    
    // employee values
    $item->name = $name;
    $item->email = $email;
    $item->age = $age;
    $item->designation = $designation;
    $item->created = date('Y-m-d H:i:s');
    
    if($item->updateEmployee()){
        echo json_encode("Employee data updated.");
        header("location: ../listeEmployes.php");
        exit;
    } else{
        echo json_encode("Data could not be updated");
    }
?>
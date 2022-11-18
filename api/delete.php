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
    
    $data = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    $item->id = $data;
    
    if($item->deleteEmployee()){
        echo json_encode("Employee deleted.");
        header('location: ../listeEmployes.php');
    } else{
        echo json_encode("Data could not be deleted");
    }
?>
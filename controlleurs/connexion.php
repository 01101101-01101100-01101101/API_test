<?php 
include("class/users.php");

$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
$mdp = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

$database = new Database();
$db = $database->getConnection();

$result = new User($db);

$result->email = $email;
$dataUser = User::getSingleUser($result);


?>
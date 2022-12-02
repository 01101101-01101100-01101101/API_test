<?php
    class User{

        // Connection
        private $conn;

        // Table
        private $db_table = "Users";

        // Columns
        public $idUser;
        public $username;
        public $email;
        public $password;
        public $role;

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        // GET ALL
        public function getUsers(){
            $sqlQuery = "SELECT idUser, username, email, password, role FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }

        // CREATE
        public function createUser(){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        username = :username, 
                        email = :email, 
                        password = :password, 
                        role = :role";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->username=htmlspecialchars(strip_tags($this->username));
            $this->email=htmlspecialchars(strip_tags($this->email));
            $this->password=htmlspecialchars(strip_tags($this->password));
            $this->role=htmlspecialchars(strip_tags($this->role));
        
            // bind data
            $stmt->bindParam(":username", $this->username);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":password", $this->password);
            $stmt->bindParam(":role", $this->role);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }

        // UPDATE
        public function getSingleUser(){
            $sqlQuery = "SELECT
                        idUser, 
                        username, 
                        email, 
                        password, 
                        role
                      FROM
                        ". $this->db_table ."
                    WHERE 
                       idUser = ?
                    LIMIT 0,1";

            $stmt = $this->conn->prepare($sqlQuery);

            $stmt->bindParam(1, $this->idUser);

            $stmt->execute();

            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->username = $dataRow['username'];
            $this->email = $dataRow['email'];
            $this->password = $dataRow['password'];
            $this->role = $dataRow['role'];
        }        

        // UPDATE
        public function updateUser(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                        username = :username, 
                        email = :email, 
                        password = :password, 
                        role = :role
                    WHERE 
                        idUser = :idUser";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->username=htmlspecialchars(strip_tags($this->username));
            $this->email=htmlspecialchars(strip_tags($this->email));
            $this->password=htmlspecialchars(strip_tags($this->password));
            $this->role=htmlspecialchars(strip_tags($this->role));
            $this->idUser=htmlspecialchars(strip_tags($this->idUser));
        
            // bind data
            $stmt->bindParam(":username", $this->username);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":password", $this->password);
            $stmt->bindParam(":role", $this->role);
            $stmt->bindParam(":idUser", $this->idUser);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }

        // DELETE
        function deleteUser(){
            $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE idUser = ?";
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->idUser=htmlspecialchars(strip_tags($this->idUser));
        
            $stmt->bindParam(1, $this->idUser);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }

    }
?>


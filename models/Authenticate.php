<?php
require_once './db/Connection.php';

class Authenticate{
        public $email;
        public $password;
        public $conn;
        
        public function __construct($email='?' , $password='?'){
          $this->$email=$email;
          $this->$password=$password;
          $this->conn=Connection::conn();
        }
        public function login($email ,$password){
            $sql = 'SELECT * FROM users WHERE email = ? AND password = ?';
            $stm = $this->conn->prepare($sql);
            $stm->execute([$email, $password]);
            return $stm->rowCount();;
        }

        public function logout(){

        }
} 
?>
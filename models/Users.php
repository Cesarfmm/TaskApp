<?php

require_once './db/Connection.php';

class Users{
   public $id;
   public $name;
   public $sur_names;
   public $dni;
   public $email;
   public $user;
   public $password;
   public $conn;
    
    function __construct(){
        $this->conn = Connection::Conn();
    }

    public function Users($id ,$name, $sur_names,$dni,$email,$user,$password){
        $this->id=$id;
        $this->name=$name;
        $this->sur_names=$sur_names;
        $this->dni= $dni;
        $this->email= $email;
        $this->user=$user;
        $this->password=$password;
    }

    public function setId($id){
        $this->id = $id;
    }
    
    public function setName($name){
        $this->name = $name;
    }
    
    public function setDni($dni){
        $this->dni = $dni;
    }
    
    public function setSur_names($sur_names){
        $this->sur_names = $sur_names;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }
       
    public function setUser($user){
        $this->user = $user;
    }
    public function setPassword($password){
        $this->passworder = $password;
    }


    public function store_user(Users $user){

    }
    public function update_user(Users $user){

    }
    public function delete_user(Users $id){
       $sql =' DELETE FROM users WHERE id =  ? ';
       $stm = $this->conn->prepare($sql);
       $stm->execute();
    }

 
    
    public function list_user(){
        $users = [];
        $sql = 'select * from users';
        $stm = $this->conn->prepare($sql);
        $stm->execute();
        while($arr = $stm->fetch()):
           $user = new Users();
          //  var_dump($arr);
           $user->setId($arr['id']);
           $user->setName($arr['name']);
           $user->setSur_names($arr['sur_names']);
           $user->setDni($arr['dni']);
           $user->setEmail($arr['email']);
           $user->setUser($arr['user']);
           array_push($users,$user);
        endwhile;
        return $users;
    }
}
?>
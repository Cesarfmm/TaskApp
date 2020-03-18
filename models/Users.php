<?php

require_once './db/Connection.php';

class Users{
   public $id;
   public $name;
   public $surnames;
   public $dni;
   public $email;
   public $user;
   public $password;
   public $conn;
    
    function __construct(){
        $this->conn = Connection::Conn();
    }

    public function Users($id ,$name, $surnames,$dni,$email,$user,$password){
        $this->id=$id;
        $this->name=$name;
        $this->surnames=$surnames;
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
    
    public function setSurnames($surnames){
        $this->surnames = $surnames;
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


    public function save_user(Users $user){
         try{
            $sql = "INSERT INTO users (name,surnames,dni,email,user,password)VALUES (?, ?, ?, ?, ?, ?)";
            $stm = $this->conn->prepare($sql);
            $stm->bindParam(1, $user->name, PDO::PARAM_STR);
            $stm->bindParam(2, $user->surnames, PDO::PARAM_STR);
            $stm->bindParam(3, $user->dni, PDO::PARAM_STR);
            $stm->bindParam(4, $user->email, PDO::PARAM_STR);
            $stm->bindParam(5, $user->user, PDO::PARAM_STR);
            $stm->bindParam(6, $user->password, PDO::PARAM_STR);
            $stm->execute();
            if($stm->rowCount() > 0 ):
                return true;
            endif;

         }catch(Exception $e){
            die($e->getMessage());
         }

         return false;
    }
    public function update_user(Users $user){

    }
    public function delete_user($id){
            try{
                $sql='DELETE from users where id = ?';
                $stm = $this->conn->prepare($sql);
                $stm->bindParam(1, $id, PDO::PARAM_STR);
                $stm->execute();
                return $stm->rowcount() > 0 ? true : false;
            }catch(Exception $e){
                die($e->getMessage());
            }
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
           $user->setSurnames($arr['surnames']);
           $user->setDni($arr['dni']);
           $user->setEmail($arr['email']);
           $user->setUser($arr['user']);
           array_push($users,$user);
        endwhile;
        return $users;
    }
}
?>
<?php
require_once './db/Connection.php';
class Task{
    public $id;
    public $title;
    public $description;
    public $created_at;
    public $update_at;

    function __construct(){
        $this->conn = Connection::conn();
    }
    function Task($title ,$description, $id = 0){
        $this->id=$id;
        $this->title=$title;
        $this->description = $description;
    }
    public function setTitle($title){
        $this->title= $title;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function setDescription($description){
        $this->description = $description;
    }
    public function setCreated_At($created_at){
        $this->created_at = $created_at;
    }
    public function setUpdate_At($update_at){
        $this->update_at= $update_at;
    }

    public function store_task(Task $id){      
    }
    public function update_task(Task $id){
        
    }
    public function delete_task($id){
           try{
            $sql='DELETE from task where id = ?';
            $stm = $this->conn->prepare($sql);
            $stm->bindParam(1, $id, PDO::PARAM_STR);
            $stm->execute();
            return $stm->rowcount() > 0 ? true : false;
           }catch(Exception $e){
              die($e->getMessage());
           }
    }

    public function save_task(Task $task){ 
          try{
              $sql="INSERT INTO  task(title,description,created_at,update_at)VALUES (?,?,NOW(),NOW());";
              $stm = $this->conn->prepare($sql);
              $stm->bindParam(1, $task->title, PDO::PARAM_STR);
              $stm->bindParam(2, $task->description, PDO::PARAM_STR);
              $stm->execute();
              return $stm->rowcount() > 0 ? true : false;
          }catch(Exception $e){
            die($e->getMessage());
          }
        return false;
    }
    public function list_task(){
     $task=[];
     $sql = 'select * from task';
     $stm = $this->conn->prepare($sql);
     $stm->execute();
     while($arr =$stm->fetch()):
        $tas=new Task();
        $tas->setId($arr['id']);
        $tas->setTitle($arr['title']);
        $tas->setDescription($arr['description']);
        $tas->setCreated_At($arr['created_at']);
        $tas->setUpdate_At($arr['update_at']);
        array_push($task,$tas);
     endwhile;
        return $task;
    }
}
?>
<?php
class Task_User{
    private $id;
    private $task_id;
    private $user_id;
    function __construct($id ,$task_id,$user_id){
        $this->id=$id;
        $this->task_id=$task_id;
        $this->user_id=$user_id;
    }
    public function store_taskUser(Task_User  $id){
        
    }
    public function update_taskUser(Task_User  $id){
      
    }
    public function delete_taskUser(Task_User $id){

    }
    public function list_taskUser(){
        
    }
}
?>
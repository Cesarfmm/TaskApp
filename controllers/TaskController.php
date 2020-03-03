<?php
      require_once './models/Task.php';

     class TaskController{
        private $task;
     function __construct(){
         $this->task =new Task();
     }
     public function index(){
        require_once './views/task/index.php';
     }
     public function create(){
      require_once './views/task/create.php';
     }
 }

?>
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

     public function store(){
      $request_payload= file_get_contents('php://input');
      $data = json_decode($request_payload);
      $task =new Task();
      $task->title=$data->title;
      $task->description=$data->description;
      $task->created_at=$data->created_at;
      $task->update_at=$data->update_at;
      echo $this->task->save_task($task) ? json_encode(['error'=>false]) : json_encode(['error'=>true]);
     
     }
 }

?>
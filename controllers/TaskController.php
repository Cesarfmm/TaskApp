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
     public function editTask(){
        require_once './views/task/edit.php';
     }
       public function remove(){
       // $res = $this->task->
       $res = $this->task->delete_task($_REQUEST['id']);
       echo $res;
       }
     public function store(){
      $request_payload= file_get_contents('php://input');
      $data = json_decode($request_payload);
      $task = new Task();
      $task->Task($data->title,$data->description);

      echo $this->task->save_task($task) ? json_encode(['error'=>false]) : json_encode(['error'=>true]);
     
     }
 }

?>
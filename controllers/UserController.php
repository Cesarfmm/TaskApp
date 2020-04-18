<?php
    require_once './models/Users.php';

    class UserController {
        private $user;

        function __construct(){
            $this->user = new Users();
            
        }

        public function index(){
           require_once './views/user/index.php';
        }
       public function create(){
        require_once './views/user/create.php';
       }

       public function edit(){
         require_once './views/user/edit.php';
       }

       public function remove(){
            $data = file_get_contents('php://input');
            $result = json_decode($data);
            echo $this->user->delete_user($result->id);
       }


       public function store(){
            $request_payload = file_get_contents('php://input');
            $data = json_decode($request_payload);
           $user =new Users();
           $user->name= $data->name;
           $user->surnames= $data->surnames;
           $user->dni= $data->dni;
           $user->email= $data->email;
           $user->user= $data->user;
           $user->password= $data->password;
           
            echo $this->user->save_user($user) ? json_encode(['error'=>false]) : json_encode(['error'=>true]);
           
       }
     
    }   
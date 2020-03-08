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
       public function remove(){
            $request_payload = file_get_contents('php://input');
            $data = json_decode($request_payload);
            $user =new Users();
            $user-> $data->id;
            echo $this->user->delete_user($user) ? json_encode(['error'=>false]) : json_encode(['error'=>true]);

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
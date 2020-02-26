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

       public function Guardar(){
           $user =new Users();
           $user->id=$_REQUEST['id'];
           $user->name=$_REQUEST['name'];
           $user->surname=$_REQUEST['surname'];
           $user->dni=$_REQUEST['dni'];
           $user->email=$_REQUEST['email'];
           $user->user=$_REQUEST['user'];
           $user->password=$_REQUEST['password'];
           
       }
     
    }   
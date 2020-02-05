<?php
    require_once './models/Users.php';

    class UserController {
        private $user;

        function __construct(){
            $this->user = new Users();
        }

        public function index(){
           //  $this->user->list_user();
           require_once './views/user/index.php';
        }
    }   
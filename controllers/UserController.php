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

        public function eliminar($id){
            try{
            $stm = $this->pdo->prepare("CALL ps_eliminar_user(?)");
            $stm->execute(array($id));
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    }   
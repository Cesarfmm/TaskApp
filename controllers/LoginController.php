<?php 

require_once './db/Connection.php';
require_once './models/Authenticate.php';

class LoginController{
    //private $users;
     private $auth;
    function __construct(){

     //  $this->users=new Users();
        $this->auth = new Authenticate();
        $this->conn = Connection::Conn();
    }

    public function index(){
        //$this->users->login();
        require_once './views/login/login.php';
    }

    public function login(){
         $data = file_get_contents('php://input');
         $result = json_decode($data);
    
        echo $this->auth->login($result->email, $result->password);
    }
}
?>
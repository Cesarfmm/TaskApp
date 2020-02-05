<?php
    define("LINKS",'http://localhost/TaskApp/Assets');
   
    require_once("controllers/TaskController.php");
    require_once("controllers/LoginController.php");
    require_once("controllers/UserController.php");
        if(!isset($_GET['url'])):
         require_once("controllers/LoginController.php");
         $Controllers = new LoginController();
         $Controllers->index();
        else:
            $url = $_GET['url'];
                $url = rtrim($url,"/"); // elimina aquellos que no nesecite
                $url = explode('/',$url);
                $Controller = "controllers/".$url[0].".php";
                if(file_exists($Controller)):
                    require_once $Controller;
                $Controlador = new $url[0]();    
                if(!isset($url[1])):
                    $Controlador->index();
                elseif(isset($url[1])):
                    $Controlador->{$url[1]}();
                endif;
            else:
                echo "Archivo no existe!";
                endif;
          
        endif;

?>
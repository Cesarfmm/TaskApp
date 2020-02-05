<?php
class Connection{
    public static function Conn(){
        try{
            $conn= new PDO('mysql:host=localhost;dbname=task','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $conn->exec( "SET CHARACTER SET utf8");
            return $conn;

        }catch(PDOException $E){
            die("Error".$E->getMessage());
            echo "Linea:".$E->getLine();
        }
    }
}

?>
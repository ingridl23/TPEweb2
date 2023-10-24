<?php
class modeloLogin{
    private $conexion;
    public function  __construct(){
        $this->conexion= new PDO ('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB . ';charset=utf8', MYSQL_USER, MYSQL_PASS);
    }
 

     function getUserByPassword($usuario){
        $query = $this->conexion->prepare("SELECT * FROM registro WHERE nombre= ? ");
        $query->execute([$usuario]);
        $resultado=$query->fetch(PDO::FETCH_OBJ);
        return $resultado;
    }

   
}

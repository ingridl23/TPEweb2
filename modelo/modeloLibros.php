<?php
require_once 'config.php';
class modeloLibros{
     private $conexion;

    public function __construct(){
        $this->conexion= new PDO ('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB . ';charset=utf8', MYSQL_USER, MYSQL_PASS);
    }


    function getLibrosmodel($autor){
        
     
       $query = $this->conexion->prepare('SELECT * FROM libros WHERE id_autor= ?');
       $query->execute([$autor]);
       $libros = $query->fetchAll(PDO::FETCH_OBJ);
       return $libros;
   }

 /**
     * Devuelve la lista de libros completa.
     */
    public function getAllLibros() {
    

        // ejecuto la sentencia 
        $query = $this->conexion->prepare("SELECT * FROM libros LEFT JOIN autor ON autor.id_autor=libros.id_libros ");
        $query->execute();

        //  obtengo los resultados
        $libros = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $libros;
    }



//inserta un libro a la bbdd//
function insertLibro($titulo,$AñoDePublicacion,$descripcion,$idAutor){
        $consulta="INSERT INTO libros (titulo,Anio,descripcion,id_autor) VALUES (?, ?, ?,?)";
        $query = $this->conexion->prepare($consulta);
        $query->execute([$titulo,$AñoDePublicacion,$descripcion,$idAutor]);
        //$libroInsertado=$query->fetchAll(PDO::FETCH_OBJ);   
        //return $libroInsertado;
    }

     // Elimina un libro  dado su id.
     
    function deleteLibroById($id){
        $consulta='DELETE FROM libros WHERE id_libros = ?';
        $query = $this->conexion->prepare($consulta);
        $query->execute([$id]);
    
    }
    function updatelibros($t,$a,$d,$id){//edita un libro//
        $consulta="UPDATE libros SET titulo= '$t',Anio='$a', descripcion='$d' WHERE  id_libros= $id";
         $query=$this->conexion->prepare($consulta);
         $query->execute([]);
        // $modificacion=$query->fetchAll(PDO::FETCH_ASSOC);
        // return $modificacion;
        
    }

    //function TraerLibrosModificar($idlibro){
       // $consulta= 'SELECT * FROM libros WHERE id_libros= ?';
       // $query=$this->conexion->prepare($consulta);
      //  $query->execute([$idlibro]);
      //  $resp=$query->fetchAll(PDO::FETCH_ASSOC);
      //  return  $resp;
   // }

   
}
    

<?php
require_once 'modelo/modeloLibros.php';
require_once 'vistas/admin.php';

class ControllerAdmin{
    private $model;
    private $viewAdmin;

    function __construct(){
        $this->model=new modeloLibros();
        $this->viewAdmin= new AdminView();
    }

     function showLibros() {           
        $libros = $this->model->getAllLibros();
        $this->viewAdmin->showLibros($libros);
    }

    function EditarLibro($id){
        
        $this->viewAdmin->FormEditar($id); //lleva al template del form editar//
       // $this->updateBooks($id);
      // header("Location: ".BASE_URL.'modificar');

     // $id=$_POST['id'];
     

    }

    function updateBooks($id){//modificar  palabra clave update en routerviene a esta funcion //
       
    
        $t=$_POST['titulo'];
        $a=$_POST['Año'];
        $d=$_POST['descripcion'];
      

      $this->model->updateLibros($t,$a,$d,$id);

         
    //  header("Location: ".BASE_URL.'');
    }
            
        
    
        
     

     function deleteBooks($id) {//borrar//

        $this->model->deleteLibroById($id);
        header("Location: ". BASE_URL.'borrar');
    }
    }

<?php

//1. conexion a la base de datos
//consulta SELECT:
try{


    $db = new PDO('mysql:host=localhost;dbname=tpe_web2;charset=utf8', 'root','');
    $consulta='SELECT* FROM autor LEFT JOIN libros ON autor.id_autor=libros.id_libro;';
    $query=$db->prepare($consulta);
    $query->execute();
    
    $resultado=$query->fetchAll(PDO::FETCH_ASSOC);
    
    //var_dump($resultado);
  //  foreach ($resultado as $r){
    
    //echo $r ['id_autor'];
  //  echo $r ['nombre_apellido'];
  //  echo('<br>');
 //   echo $r ['nacionalidad'];
 //   echo('<br>');
  //  echo $r ['titulo'];
 //   echo('<br>');
 //   echo $r ['Año_de_publicacion'];
 //   echo('<br>');
 //   echo $r['descripccion'];
 //   echo('<br>');
    //};
}catch(Exception $e){
   die('error:'.$e->GetMessage());

}finally{
    $db=null;
}
?>

<?php
//consulta 2//

//antes comparar si es un usuario administrador para que tenga acceso a los permisos borrar e insertar//
//$db2 = new PDO('mysql:host=localhost;dbname=tpe_web2;charset=utf8', 'root', '');
//$consulta2='INSERT INTO `autor`(`id_autor`, `nombre_apellido`, `nacionalidad`) VALUES (?,?,?)';
//$query2=$db->prepare($consulta2);
//$query2->execute();

//$resultado2=$query2->fetchAll(PDO::FETCH_OBJ);
 //echo
 //echo
 //echo
?>

<?php
//consulta 3 
 //$db3 = new PDO('mysql:host=localhost;dbname=tpe_web2;charset=utf8', 'root', '');
//$consulta3='DELETE '`libros` FROM '...''';
 //$query3=$db->prepare($consulta3);
// $query3->execute();

//$resultado3=$query3->fetchAll(PDO::FETCH_OBJ);
//echo
//echo
?>

<?php
//consulta4
//$db4 = new PDO('mysql:host=localhost;dbname=tpe_web2;charset=utf8', 'root', '','libro');
//$consulta4="UPDATE `libro` SET `descripccion`='?','?','?','?'";
//$query4=$db->prepare($consulta4);
//$query->execute();

//$resultado4=$query4->fetchAll(PDO::FETCH_OBJ);
//echo
//echo
?>

<?php

$dbregistro= new PDO('mysql:host=localhost;dbname=tpe_web2;charset=utf8', 'root', '',);
//$consulta="SELECT INTO registro(nombre,direccion,email,contraseña)";

 //$resultado= mysqli_query($dbregistro, $consulta);
 //$query=$dbregistro->prepare($consulta);
 //$query->execute();

?>
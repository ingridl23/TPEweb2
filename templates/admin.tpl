<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wiki libro Admin</title>
    <link rel="stylesheet" href="CSS/admin.css"/> 
</head>
<body class="bodyAdmin">

<div class="conteiner1">
    <div class="titulopage2">wiki libro Welcome Admin</div>
    <a  class="btncerrar" name="cerrar" href="logout">cerrar sesion</a>

<section class="sectionFormAdmin">
        <form method="post" action=" insertar">
        <input type="text" name="titulo" placeholder="ingresa titulo">
        <input type="number" name="AñoDePublicacion" placeholder="Año De Publicacion">
        <input type="text" name="descripcion" placeholder="ingresa descripcion">
        <input type="number" name="idAutor" placeholder="id de autor">
       
        <input type="submit" name="btn-submit" value="insertar">
        </form>
</section>
</div>
<!-- lista de tareas -->
<table class="tabla">

    <thead class="encabezados">
            <tr>
                <th>Título</th>
                <th>año de publicacion</th>
                <th>descripcion</th>
                <th>id autor</th>
                <th> id libro</th>
            </tr>
        <thead>
    {foreach from=$libros item=$libro}
   
             <tr>
             <td>{$libro->titulo}</td>
             <td>{$libro->Anio}</td>
             <td>{$libro->descripcion}</td>
             <td>{$libro->id_autor}</td>
             <td>{$libro->id_libros}</td> 

              <td class="btns" > <a href='borrar/{$libro->id_libros}' type='button' class="btnDelete">Borrar</a></td>
               <td class="btns"><a href='editar/{$libro->id_libros}' type='button' class="btnUpdate">editar</a></td>
           </tr>
    {/foreach}
    </table>
<p class="mt-3"><small>Mostrando {$count} libros</small></p>
</body>

<footer class="footer">
    <h6 class="h6footer">tpe web 2 &copy;2023</h6>
</footer>
 
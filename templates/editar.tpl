
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar tarea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

<h1> FORMULARIO DE EDICION </h1>
    <div class="container">
        <div class="row">
            <form action="{$id}/update" method="POST">
         

          
                <div class="mb-3 mt-3">
                   <!-- <h3 name="id">{$id}</h3>-->
                    <textarea class="form-control" name="titulo" id="exampleFormControlTextarea1" rows="3" placeholder=" modifique el titulo "> </textarea>
                </div>

                      <div class="mb-3 mt-3">

                    <textarea class="form-control" name="Año" id="exampleFormControlTextarea1" rows="3" placeholder=" modifique el año de publicacion "></textarea> 
                    <!-- no toma los corchetes ni respeta la iteracion del foreach -->
                </div>

                     <div class="mb-3 mt-3">

                    <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3" placeholder="modifique descripcion"></textarea>
                </div>

                

                <button type="submit" name="editar" class="btn btn-success">Guardar tarea</button>
              
            </form>
                
        </div>

       
    </div>


</body>
</html>


















<!--<form method="post" action="update/{$id}">
        <input type="text" name="titulo" placeholder="ingresa titulo">
        <input type="number" name="AñoDePublicacion" placeholder="Año De Publicacion">
        <input type="text" name="descripcion" placeholder="ingresa descripcion">
        <input type="number" name="idAutor" placeholder="id de autor (id valido)">
       
        <input type="submit" name="btn-submit" value="guardar"> -->
        </form>

    {include file= 'footer.tpl'}
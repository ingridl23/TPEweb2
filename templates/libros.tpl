 <link rel="stylesheet" href="CSS/admin.css"/>
<h1 class="tituloLista">Lista por autor: {$autor}</h1>

<table class="tabla1">
 <thead class="encabezados1">
            <tr>
                <th>Título</th>
                <th>año de publicacion</th>
                <th>descripcion</th>
            </tr>
        <thead>

{foreach from=$libros item=item}
      
                <tr>
                    <td class="tdtitulo">{$item->titulo}</td>

                    <td>{$item->Anio}</td> 
                    
                    <td>{$item->descripcion}</td>
                </tr>
  {/foreach}
                </table>
 
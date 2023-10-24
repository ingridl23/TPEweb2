
<body>

    <h1>{$titulo}</h1>

    <ul>
        {foreach from=$categoria item=$autor}
        <li><a href="autores.php?autor={$autor.url}">{$autor.categoria}</a></li>

        {/foreach}
       
    </ul>

</body>
  {include 'footer.tpl'}
		
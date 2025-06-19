<html>
    <link rel="stylesheet" href="style.css">
<body>

    <div>      
<?php

    print("<h3> Questão 06: Categorias de Produtos </h3> <br>"); 

    $categoriasProdutos = [
        "eletronicos", "cozinha", "comida", "bebidas", "limpeza"
    ]; 

    print("<p> Produtos em ordem alfabetica crescente!</p> <br>");
    sort($categoriasProdutos); 
    print_r($categoriasProdutos); 


 print("<p> Produtos em ordem alfabetica decrescente!</p> <br>");

    rsort($categoriasProdutos); 
    print_r($categoriasProdutos); 










?>
    </div>
     <a href="https://localhost/pratica03-pweb1/" class="botao">Voltar</a>

</body>
</html>
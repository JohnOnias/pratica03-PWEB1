<html>
    <link rel="stylesheet" href="style.css">
<body>

    <div>      
<?php

    print("<h3> Questão 07: Precificação de Produtos </h3> <br>"); 

    $precosProdutos = [
        "Carne" => 5.35,
        "Feijao" => 6.58,
        "Arroz" => 7.50
    ]; 
    arsort($precosProdutos);

    foreach($precosProdutos as $chave => $valor){
        print("Produto: $chave Preço: R$ $valor");
        print("<br>");
    }
 







?>
    </div>
     <a href="https://localhost/pratica03-pweb1/" class="botao">Voltar</a>

</body>
</html>
<html>
    <link rel="stylesheet" href="style.css">
<body>

    <div>      
<?php

    print("<h3> Questão 12: Aumento de Preços </h3> <br>");
   
    $precosAntigos = [15.50, 22.00, 30.75, 8.99];

    $precosNovos = array_map(function($preco) {
        return $preco * 1.10;
    }, $precosAntigos);

    print ("Preços antigos:\n");
        print("<br>");

    foreach ($precosAntigos as $preco) {
        print ("R$ " . number_format($preco, 2, ',', '.') . "\n");
    }
    print("<br>");

    print ("\nPreços com aumento de 10%:");
        print("<br>");
    foreach ($precosNovos as $preco) {
        print ("R$ " . number_format($preco, 2, ',', '.') . "\n");
    }
    print("<br>");
?>
    </div>
     <a href="https://localhost/pratica03-pweb1/" class="botao">Voltar</a>

</body>
</html>
<html>
    <link rel="stylesheet" href="style.css">
<body>

    <div>      
<?php

    print("<h3> Questão 13: Média de Despesas Mensais </h3> <br>");
   
    $despesasMensais = [1200.50, 850.75, 1500.00, 920.30, 1100.20];

    $soma = array_sum($despesasMensais);
    $quantidade = count($despesasMensais);
    $media = $soma / $quantidade;

    print "Média de despesas mensais: R$ " . number_format($media, 2, ',', '.')
?>
    </div>
     <a href="https://localhost/pratica03-pweb1/" class="botao">Voltar</a>

</body>
</html>
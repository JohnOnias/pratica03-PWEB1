<html>
    <link rel="stylesheet" href="style.css">
<body>

    <div>      
<?php

    print("<h3> Questão 18: Filtragem de Dados de Sensor </h3> <br>");
    $dadosSensor = [15.2, 28.9, 12.0, 35.5, 20.1, 40.0, 5.8];

    $leiturasAltas = array_filter($dadosSensor, function($valor) {
        return $valor > 25.0;
    });

    $leiturasAltas = array_values($leiturasAltas);

    print "Leituras acima de 25.0:\n";
    print_r($leiturasAltas);
?>
    </div>
     <a href="https://localhost/pratica03-pweb1/" class="botao">Voltar</a>

</body>
</html>
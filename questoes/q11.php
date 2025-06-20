<html>
    <link rel="stylesheet" href="style.css">
<body>

    <div>      
<?php

    print("<h3> Questão 11: Monitoramento de Sensores </h3> <br>");
    $temperaturasDiarias = [29.5, 31.2, 27.8, 30.0, 32.6, 28.9, 26.4];

    $temperaturaMaxima = max($temperaturasDiarias);
    $temperaturaMinima = min($temperaturasDiarias);

    print( "Temperatura máxima registrada: {$temperaturaMaxima} °C\n");
    print ("Temperatura mínima registrada: {$temperaturaMinima} °C\n");


?>
    </div>
     <a href="https://localhost/pratica03-pweb1/" class="botao">Voltar</a>

</body>
</html>
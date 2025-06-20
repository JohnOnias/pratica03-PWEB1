<html>
    <link rel="stylesheet" href="style.css">
<body>

    <div>      
<?php

    print("<h3> Questão 15: Melhor Resultado por Aluno</h3> <br>");

    $registrosTreino = [
        ["nome" => "Alice",  "resultados" => [50, 60, 55]],
        ["nome" => "Bruno",  "resultados" => [70, 68, 72]],
        ["nome" => "Carla",  "resultados" => [40, 45, 43]]
    ];

    foreach ($registrosTreino as $aluno) {
        $nome = $aluno["nome"];
        $resultados = $aluno["resultados"];
        
        $melhorResultado = max($resultados);
        
        print "Aluno: $nome\n";
        print "Melhor resultado: $melhorResultado\n\n";
         print("<br>"); 
    }
?>
    </div>
     <a href="https://localhost/pratica03-pweb1/" class="botao">Voltar</a>

</body>
</html>
<html>
    <link rel="stylesheet" href="style.css">
<body>

    <div>      
<?php

    print("<h3> Questão 14: Registros de Treino de
Academia</h3> <br>");

    $registrosTreino = [
        ["nome" => "Alice",  "resultados" => [50, 60, 55]],
        ["nome" => "Bruno",  "resultados" => [70, 68, 72]],
        ["nome" => "Carla",  "resultados" => [40, 45, 43]]
    ];

    foreach ($registrosTreino as $aluno) {
        $nome = $aluno["nome"];
        $resultados = $aluno["resultados"];
        
        $media = array_sum($resultados) / count($resultados);
        
        print "Aluno: $nome\n";
        print "Média dos resultados: " . number_format($media, 2, ',', '.') . "\n\n";
        print("<br>"); 
    }
?>
    </div>
     <a href="https://localhost/pratica03-pweb1/" class="botao">Voltar</a>

</body>
</html>
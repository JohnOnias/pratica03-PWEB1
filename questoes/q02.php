<html>
    <link rel="stylesheet" href="style.css">
<body>
    <div>
        
<?php
    print("<h3> Questão 02: Boletim Escolar </h3> <br>"); 
    $boletim = [
        "aluno1" => [
            "Nome" => "Franciso Alencar Souza",
            "Portugues" => 8.3,
            "Matematica" => 6.5, 
            "Historia" => 7.3,
            "Geografia" => 5.7
        ]
    ]; 

    print("<ul>");
    foreach($boletim as $chave => $valor) {
        print("<li><strong>Nome:</strong> " . $valor['Nome'] . "</li>");
        print("<ul>");
        print( "<li>Português: " . $valor['Portugues'] . " - " . ($valor['Portugues'] >= 7 ? "Aprovado" : "Reprovado") . "</li>");
        print( "<li>Matemática: " . $valor['Matematica'] . " - " . ($valor['Matematica'] >= 7 ? "Aprovado" : "Reprovado") . "</li>");
        print("<li>História: " . $valor['Historia'] . " - " . ($valor['Historia'] >= 7 ? "Aprovado" : "Reprovado") . "</li>");
        print("<li>Geografia: " . $valor['Geografia'] . " - " . ($valor['Geografia'] >= 7 ? "Aprovado" : "Reprovado") . "</li>");
        print ("</ul>");
    }
    print( "</ul>");
?>
    </div>
     <a href="https://localhost/pratica03-pweb1/" class="botao">Voltar</a>

</body>
</html>
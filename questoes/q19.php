<html>
    <link rel="stylesheet" href="style.css">
<body>

    <div>      
<?php

    print("<h3> Questão 19: Gestão de Fila de Atendimento </h3> <br>");
    $filaAtendimento = ['João Silva', 'Maria Santos', 'Pedro Costa'];
    array_unshift($filaAtendimento, 'Ana Oliveira');

    array_push($filaAtendimento, 'Luiz Fernandes');

    print "Fila de atendimento atual:\n";
    print_r($filaAtendimento);
?>
    </div>
     <a href="https://localhost/pratica03-pweb1/" class="botao">Voltar</a>

</body>
</html>
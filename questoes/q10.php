<html>
    <link rel="stylesheet" href="style.css">
<body>

    <div>      
<?php

    print("<h3> Questão 10: Registro de Presenças em
Eventos </h3> <br>");

$listaParticipantes = ['Carlos', 'Ana', 'João', 'Maria', 'João', 'Pedro', 'Maria', 'Ana'];

$participantesUnicos = array_unique($listaParticipantes);

print_r($participantesUnicos);
?>
    </div>
     <a href="https://localhost/pratica03-pweb1/" class="botao">Voltar</a>

</body>
</html>
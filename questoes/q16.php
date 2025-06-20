<html>
    <link rel="stylesheet" href="style.css">
<body>

    <div>      
<?php

    print("<h3> Questão 16: Gerador de Senhas </h3> <br>");
    $caracteresPermitidos = ['a', 'b', 'c', '1', '2', '3', '@', '#', '$'];

    $stringBase = implode('', $caracteresPermitidos);

    print "String base para geração de senhas: $stringBase\n";
?>
    </div>
     <a href="https://localhost/pratica03-pweb1/" class="botao">Voltar</a>

</body>
</html>
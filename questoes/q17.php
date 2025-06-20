<html>
    <link rel="stylesheet" href="style.css">
<body>

    <div>      
<?php

    print("<h3> Questão 17: Análise de Frases </h3> <br>");
    $textoAnalise = "A programação PHP é fundamental para o desenvolvimento web";
    
    $palavras = explode(' ', $textoAnalise);

    print "Vetor de palavras:\n";
    print("<br>"); 
    print_r($palavras);

    $qtdPalavras = count($palavras);
         print("<br>"); 
    print "\nQuantidade de palavras: $qtdPalavras\n";
?>
    </div>
     <a href="https://localhost/pratica03-pweb1/" class="botao">Voltar</a>

</body>
</html>
<html>
    <link rel="stylesheet" href="style.css">
<body>

    <div>      
<?php

    print("<h3> Questão 08: Jogo de Cartas Digital </h3> <br>"); 

    $cartas = [
        "As de Espadas", "Reis de Copas", "Dama de Paus", "Valete de Ouros"

    ];
        print("<h4> Cartas antes de embaralhar</h4>"); 
        print("<ul>");
    foreach($cartas as $key => $value){
        print("<li>$value </li>"); 
    }
    print("</ul>");
    print("<br>"); 
        shuffle($cartas); 
        print("<h4> Cartas depois de embaralhar</h4>"); 
        print("<ul>");
    foreach($cartas as $key => $value){
        print("<li>$value </li>"); 
    }
    print("</ul>");



?>
    </div>
     <a href="https://localhost/pratica03-pweb1/" class="botao">Voltar</a>

</body>
</html>
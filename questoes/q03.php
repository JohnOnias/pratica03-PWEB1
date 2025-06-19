<html>
    <link rel="stylesheet" href="style.css">
<body>
    <div>
<?php
    print("<h3> Questão 03: Gestão de Estoque de Livros </h3> <br>"); 
    $titulos = [
        "livro1" => "Senhor dos Aneis", 
        "livro2" => "A Tormenta de Espadas",
        "livro3" => "fogo e sangue"
    ];

    $titulos["livro4"] = "A furia dos Reis"; 
    print("Livro Adcionado: ". $titulos["livro4"]);
    print("<br>"); 
    print("Livro Removido: ". $titulos["livro3"]);
    unset($titulos["livro3"]); 
  
    print("<ul>");
    foreach($titulos as $key =>$value){
        print("<li> $key: $value</li>"); 

    }
    print("</ul>"); 

?>
    </div>
     <a href="https://localhost/pratica03-pweb1/" class="botao">Voltar</a>

</body>
</html>
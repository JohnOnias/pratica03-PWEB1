<html>
    <link rel="stylesheet" href="style.css">
<body>
    <div>
        <?php

    print("<h3> Questão 01: Gerenciamento de Produtos </h3> <br>"); 
$produtos = [
    "produto1" => [
        "nome" => "feijao",
        "SKU" => 123456
    ],
    "produto2" => [
        "nome" => "arroz",
        "SKU" => 234567
    ],
    "produto3" => [
        "nome" => "carne",
        "SKU" => 345678
    ],
    "produto4" => [
        "nome" => "agua",
        "SKU" => 456789
    ],
    "produto5" => [
        "nome" => "oleo",
        "SKU" => 567891011
    ]
]; 

print("<ul>");
foreach($produtos as $nome => $id){
    print("Produtos:". $id['nome']. " SKU:" .$id['SKU']. "<br>"); 
}

print("</ul>");


?>
    </div>

     <a href="https://localhost/pratica03-pweb1/" class="botao">Voltar</a>

     
</body>
</html>
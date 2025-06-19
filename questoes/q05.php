<html>
    <link rel="stylesheet" href="style.css">
<body>

    <div>      
<?php
print("<h3> Questão 05: Monitoramento Ambiental </h3> <br>");
$especiesObservadas = ['Beija-flor', 'Canário', 'Bem-te-vi', 'Sabiá', 'Beija-flor', 'Coruja'];

if(in_array("Pardal", $especiesObservadas)){
    print("<p> Passaro ja observado </p> <br>");
}
else{
    print("<p> Passaro não observado! </p> <br>"); 
}

$temp = array_unique($especiesObservadas);
print_r($temp); 




?>
    </div>
     <a href="https://localhost/pratica03-pweb1/" class="botao">Voltar</a>

</body>
</html>
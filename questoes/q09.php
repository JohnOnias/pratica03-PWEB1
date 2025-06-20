<html>
    <link rel="stylesheet" href="style.css">
<body>

    <div>      
<?php

    print("<h3> Questão 09: Consolidação de IDs de Usuários </h3> <br>"); 
    $idsFonteA = [ 101, 105, 102]; 
    $idsFonteB = [103, 101, 106]; 
     
    
    $ids = array_unique(array_merge($idsFonteA, $idsFonteB)); 
    print_r($ids); 

?>
    </div>
     <a href="https://localhost/pratica03-pweb1/" class="botao">Voltar</a>

</body>
</html>
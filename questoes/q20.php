<html>
    <link rel="stylesheet" href="style.css">
<body>

    <div>      
<?php

    print("<h3> Questão 20: Sistema de Inventário</h3> <br>");
   $inventario = ['notebook' => 20, 'mouse' => 50, 'teclado' => 30];

    if (!array_key_exists('monitor', $inventario)) {
        $inventario['monitor'] = 15;
    }
    if (array_key_exists('notebook', $inventario)) {
        $inventario['notebook'] += 5;
    }
    print "Estado final do inventário:\n";
    print_r($inventario);
?>
    </div>
     <a href="https://localhost/pratica03-pweb1/" class="botao">Voltar</a>

</body>
</html>
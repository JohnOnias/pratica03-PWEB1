<html>
    <link rel="stylesheet" href="style.css">
<body>

    <div>      
<?php
print("<h3> Questão 04: Sorteio e Números Primos </h3> <br>");

$sorteados = [];
$primos = [];

function ehPrimo($numero): bool {
    if ($numero <= 1) return false;
    if ($numero == 2) return true;
    if ($numero % 2 == 0) return false;

    for ($i = 3; $i <= sqrt($numero); $i += 2) {
        if ($numero % $i == 0) return false;
    }
    return true;
}

while (count($sorteados) < 10) {
    $n_aleatorio = rand(0, 60);
    $sorteados[] = $n_aleatorio;
}

for ($i = 0; $i < 10; $i++) {
    if (ehPrimo($sorteados[$i]) && !in_array($sorteados[$i], $primos)) {
        $primos[] = $sorteados[$i];
    }
}

echo "Números sorteados: <br>";
print_r($sorteados);
echo "<br><br>Números primos entre os sorteados: <br>";
print_r($primos);
?>

    </div>
     <a href="https://localhost/pratica03-pweb1/" class="botao">Voltar</a>

</body>
</html>
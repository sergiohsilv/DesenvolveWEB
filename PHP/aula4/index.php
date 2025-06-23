<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 4</title>
</head>
<body>
    <?php

    $traco = "<br>===========================================================================================================================<br>";

    //Operadores de comparação
    /* == Igual,
    != Diferente,
    === Idêntico,
    !== Não idêntico,
    > Maior que,
    < Menor que,
    >= Maior ou igual, 
    <= Menor ou igual */
    $x = 5;
    $y = 0;
    echo "<br> <strong>== Igual</strong> <br>";
    var_dump($x == $y);
    echo "<br> <strong>!= Diferente</strong> <br>";
    var_dump($x != $y);
    echo "<br> <strong>=== Idêntico</strong> <br>";
    var_dump($x === $y);
    echo "<br> <strong>> Maior que</strong> <br>";
    var_dump($x > $y);
    echo "<br> <strong>< Menor que</strong> <br>";
    var_dump($x < $y);
    echo "<br> <strong>>= Maior ou igual</strong> <br>";
    var_dump($x >= $y);
    echo "<br> <strong><= Menor ou igual</strong> <br>";
    var_dump($x <= $y);
    echo $traco;

    echo "<h2> Inserir Caracteres Unicode </h2>";
    //https://unicode.org/emoji/charts/full-emoji-list.html#263a
    echo "\u{1F47E}";
    echo "<br>";
    echo'\u{1F47E}';
    echo $traco;
    echo "<h2>Operadores Lógicos</h2>";
    echo "<p><strong>&& (E)</strong></p>";
    $a = true;
    $b = false;
    var_dump($a && $b);

    echo "<p><strong>|| (OU)</strong></p>";
    $a = true;
    $b = false;
    var_dump($a || $b);
    //Exemplo
    $numero1 = 5;
    $numero2 = 10;
        if (($numero1 > 5) && ($numero2 < 11))
        {
            echo "";
        } else {
            echo "<br><br>Uma das duas condições é falsa";
        }
    echo $traco;
    echo "<h2>Operadores de Atribuição</h2>";
    echo "<strong>+=, -=, *=, /=, %=</strong>";
    echo "<br>".$numero1 += $numero2; //$numero1 = $numero1 + $numero2
    $numero1 = 5;
    $numero2 = 10;
    echo "<br>".$numero1 -= $numero2; //$numero1 = $numero1 - $numero2
    $numero1 = 5;
    $numero2 = 10;
    echo "<br>".$numero1 *= $numero2; //$numero1 = $numero1 * $numero2
    $numero1 = 5;
    $numero2 = 10;
    echo "<br>".$numero1 /= $numero2; //$numero1 = $numero1 / $numero2
    $numero1 = 5;
    $numero2 = 10;
    echo "<br>".$numero1 %= $numero2; //$numero1 = $numero1 % $numero2
    echo $traco;
    echo "<h2>Função para gerar números aleatórios</h2>";
    echo "<br>".rand(1,6);
    echo "<br>".rand();
    echo $traco;
    echo "<h2>Outras funções em PHP</h2>";
    echo "<p><strong>abs()</strong> - Valor absoluto</p>";
    $numero1 = 5;
    $numero2 = 10;
    echo abs($numero1 -= $numero2); //$numero1 = $numero1 - $numero2
    echo "<p><strong>base_convert()</strong> - Conversor de base entre números</p>";
    $binario = "1010";
    echo $decimal = base_convert($binario, 2, 10);
    echo "<p><strong>ceil()</strong> - Arredondar para cima</p>";
    $arrendondarCima = 3.2;
    echo ceil($arrendondarCima);
    echo "<p><strong>floor()</strong> - Arredondar para Baixo</p>";
    $arrendondarBaixo = 3.9;
    echo floor($arrendondarBaixo);
    echo "<p><strong>round()</strong> - Arredondar</p>";
    $arrendondar = 3.14159;
    echo round($arrendondar)."<br>";
    echo round($arrendondar,2);
    echo "<p><strong>hypot()</strong> - Achar a hipotenusa entre dois catetos</p>";
    echo hypot(3,4);
    echo "<p><strong>intdiv()</strong> - Divisão de inteiros</p>";
    echo intdiv(10, 5);
    echo "<p><strong>sqrt()</strong> - Raíz quadrada</p>";
    $raizquadrada = 256;
    echo sqrt($raizquadrada);





    ?>
</body>
</html>
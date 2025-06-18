<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3</title>
</head>
<body>
    <?php

    $traco = "<br>===============================================================================================</br>";

        echo "<h2>Obtendo os tipos de dados com var_dump()</h2>";
        $x = 5;
        $x = 10.365;
        $x = "Hello World";

        var_dump($x);
        echo $traco;

        echo "<h2>Constantes</h2>";
        echo "As constantes em PHP podem comçar com uma letra ou underline, mas não tem o sinal $ antes do seu nome<br>Para criar uma constante utilizamos a função<strong> define()</strong><br>";
        define("CONSTANTE","Olá Mundo!!!");
        echo CONSTANTE;
        echo $traco;
        define("ANIMAIS1", array('cachorro', 'gato', 'pássaro', 'peixe'));
        echo ANIMAIS1[1]."<br>";
        echo ANIMAIS1[2]."<br>";
        var_dump(ANIMAIS1);
        echo $traco;
        echo "<h2>Exemplos com if</h2>";
        $divisor = 20;
        $quociente = 2;
        $resto = $divisor % $quociente;
        if ($resto == 0)
        {
            echo "O número $divisor é par<br>";
        } else {
            echo "O número $divisor é impar<br>";
        }

        $num = 30;
        //if ($num < 20)
        //{
        //    echo "O Número $num é menor que 20<br>";
        //} else {
        //    echo "O Número $num é maior que 20<br>";
        //}
        echo $num = ($num < 20)? "Menor que 20<br>" : "Maior que 20<br>";

        $num = 19;
        /*if ($num < 20)
        {
            echo "O Número $num é menor que 20<br>";
        } elseif ($num > 20) {
            echo "O Número $num é maior que 20<br>";
        }else {
            echo "O Número $num é igual a 20";
        } */
        echo $num = ($num < 20)? "O Número $num é menor que 20" :
                    (($num > 20)? "O Número $num é maior que 20" : 
                    "O Número $num é igual a 20");
        echo $traco;

        $i = 1;
        while ($i <=20)
        {
            echo $i.($i != 20 ? "|" : "");
            $i++;
        }
        echo $traco

        





    ?>
</body>
</html>
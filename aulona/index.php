<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    

    <?php
        //Exemplo com operadores aritméticos

        echo "<h1 style='color:#f00;'> Calculadora Manual </h1>";
        echo "<h2 class='titulo'> Operações básicas </h2>";

        $numero1 = 8;
        $numero2 = 2;

        $soma = $numero1 + $numero2;
        echo "$numero1 + $numero2 = $soma <br />";
        echo "$numero1 - $numero2 = " . ($numero1 - $numero2) . "<br />";
        echo $numero1 . ' * ' . $numero2 . ' = ' . ($numero1 * $numero2) . "<br />";
        echo "$numero1 / $numero2 = " . ($numero1 / $numero2) . "<br />";
        echo "$numero1 % $numero2 = " . ($numero1 % $numero2) . "<br />";
    ?>

    <?php

        //Operadores relacionais
        //> < >= <= == !=

        $idade = 18;

        if($idade >17){
           echo "Maior de idade";     
        }
        else{
            echo "Menor de idade";
        }
    ?>

    <br />

    <?php
        $mes = 2;

        if($mes == 1){
            echo "Janeiro";
        }
        else if($mes == 2){
            echo "Fevereiro";
        }
        else if($mes == 2){
            echo "Fevereiro";
        }
        else{
            echo "Inválido";
        }
    ?>

    <br />

    <?php
        $mes2 = 1;

        switch($mes2){
            case 1:
                echo "Janeiro";
                break;
            case 2:
                echo "Fevereiro";
                break;
            case 3:
                echo "Março";
                break;
            default:
            echo "Inválido";
        }
    ?>

    <br />

    <?php

        $mesAtual = 6;

        if($mesAtual>=1 && $mesAtual<=3){
            echo "1º Trimestre";
        }
        else if($mesAtual>=4 && $mesAtual<=6){
            echo "2º Trimestre";
        }
        else if($mesAtual>=7 && $mesAtual<=9){
            echo "3º Trimestre";
        }
        else if($mesAtual>=10 && $mesAtual<=12){
            echo "4º Trimestre";
        }
    ?>




    
</body>
</html>
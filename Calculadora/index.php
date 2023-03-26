<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Calculadora</title>
</head>
<body>
<div class="container-fluid">
<div class="borda">
    <div class="Titulo1"> Calculando Média</div>

    <form action="index.php" method="post">
        <br>
        <div class="notas">Primeira nota:
            <input class="caixa" type="text" name="txNum1"/>
            </h4>
        </div>
        
        <div class="linha">
            <hr>
        </div>

        <div class="notas">Segunda nota:
            <input class="caixa" type="text" name="txNum2"/>
            </h4>
        </div>
        
        <div class="linha">
            <hr>
        </div>

        <div class="notas">Terceira nota:
            <input class="caixa" type="text" name="txNum3"/>
            </h4>
        </div>
        
        <div class="linha">
            <hr>
        </div>

        <div class="notas">Quarta nota:
            <input class="caixa" type="text" name="txNum4"/>
            </h4>
        </div>
                
        <div class="linha">
            <hr>
        </div>


        <br>
            <input class="botao" type="submit" value="Enviar" />
    </form>
    </div><!-- termina a borda -->

    <div class="borda2">
        <div class="resultado"> Resultado: </div>
    <?php
        $num1 = $_POST['txNum1'];
        $num2 = $_POST['txNum2'];
        $num3 = $_POST['txNum3'];
        $num4 = $_POST['txNum4'];
        
        $media = ($num1+$num2+$num3+$num4)/4;
        echo "<div class='media'> A média do aluno foi de:</div>";
        echo "<div class='valor'> $media </div>";
    ?>
    <hr>
    <?php
    echo "<div class='text'>";
        if($media<4){
            echo "<p class='reprovado'>Reprovado";
        }else if($media<6){
            echo "<p class='recuperacao'>Recuperação";
        }else{
            echo "<p class='aprovado'>Aprovado </div>";
        }
    ?>




 </div>   <!-- termina a segunda borda -->
</div>  <!-- conteiner acaba aqui -->
</body>
</html>
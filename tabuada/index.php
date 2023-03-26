<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
<div class="borda">
<div class="Titulo1"> Tabuada</div>
<form action="index.php" method="post">
    <br>
    <div class="notas"> Digite o numero:
        <input class="caixa" type="text" name="txNum1"/>
        </h4>
    </div>
    <div class="linha"></div>
    <hr>
    <br>
        <input class="botao" type="submit" value="Enviar" />
    </form>
    </div>

    <div class="borda2">
        <div class="resultado"> Resultado: </div>
    <?php
        $num1 = $_POST['txNum1'];
        for($i=0; $i<=10; $i++){
            $resultado = $num1 * $i;
            echo "<p> $num1" . " x " . "$i" .  " = $resultado </p>";
        }
    ?>
</body>
</html>